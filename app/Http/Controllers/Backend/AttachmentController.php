<?php

namespace Xstore\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Xstore\Http\Requests\RequestAttachment;
use Xstore\Http\Controllers\Controller;
use Storage,Auth,Image,DB;
use Illuminate\Support\Facades\Input;
class AttachmentController extends Controller
{
    /**
     * Class Constructor
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.layouts.attachment.index')
                ->with('attachments',app('attachment')->paginate(36));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.layouts.attachment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            if ($request->file('image')) {

                $images = Image::make(Input::file('image'))->resize(400,280,function($c){
                     $c->aspectRatio();
                });

                // START TRANSECTION DB
                DB::beginTransaction();
                $images->save( storage_path().'/app/public/products/'.str_random(40).'.'.$request->file('image')->getClientOriginalExtension(), 60);

                $image = app('attachment')->create([
                    'user_id' => Auth::user()->id,
                    'mime_type' => $images->mime,
                    'url' => $images->basename,
                ]);

                // COMMIT TRANSECTION DB
                DB::commit();
                return $image;
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error','Cant not upload image.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            if(is_null($id)){
                return view('dashboard.layouts.attachment.index')
                ->with('error','Thao tác xóa hình ảnh thất bại !!!');
            }else{
                return view('dashboard.layouts.attachment.index')
                        ->with('attachment',app('attachment')->where('id','=',$id)->first())
                        ->with('error','Thao tác xóa hình ảnh thành công !!!');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error','Quá trình tải thông tin hình ảnh thất bại');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.attachment.edit')->with('trademark',app('attachment')->where('id','=',$id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $attachment = app('attachment')->where('id','=','id')->first();
            DB::beginTransaction(5);
            if (sizeof($attachment) == 1) {
                if ($attachment->update($request->all())) {
                    return redirect('dashboard/');
                }else{
                    return redirect('dashboard/attachment/update');
                }
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error','Thao tác xóa hình ảnh thất bại !!!');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $attachment = app('attachment')->where('id','=',$id)->first();
            if ($attachment->delete() == true) {
                return redirect('dashboard/attachment')->with('success','Thao tác xóa hình ảnh thành công !!!');
            }else{
                return redirect()->back()->with('error','Thao tác xóa hình ảnh thất bại !!!');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error','Thao tác xóa hình ảnh thất bại !!!');
        }
    }


}
