<?php

namespace Xstore\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Xstore\Http\Requests\RequestTrademark;
use Xstore\Http\Controllers\Controller;
use Session,DB;
class TrademarkController extends Controller
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
        return view('dashboard.layouts.trademark.index')
                ->with('trademarks',app('trademark')->orderBy('name')->paginate(8));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.layouts.trademark.create');
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

            DB::beginTransaction();

            $trademark = app('trademark')->create($request->all());
            $attachment = app('c_attachment')->store($request);

            app('trademark_attachment')->create(['trademark_id' => $trademark->id , 'attachment_id' => $attachment->id]);
            DB::commit();
            return redirect('dashboard/trademark')->with('success','Thêm hãng sản xuất thành công.');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error','Thao tác thất bại');
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
        return view('dashboard.layouts.trademark.edit')
        ->with('trademark',app('trademark')->where('id','=',$id)->orWhere('url','=',$id)->firstOrFail());

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.layouts.trademark.edit')
            ->with('trademark',app('trademark')->where('id','=',$id)->orWhere('url','=',$id)->firstorFail())
            ->with('categories',app('category')->orderBy('name')->get());
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
            $trademark = app('trademark')->where('id','=',$id)->orWhere('url','=',$id)->firstOrFail();

            if ($trademark->update($request->all())) {
                $relation = app('trademark_attachment')->where('trademark_id','=',$trademark->id)->first();
                if (sizeof($relation) == 1) {
                    $attachment = app('c_attachment')->store($request);

                    if ($attachment == false) {
                        $relation->update(['trademark_id' => $trademark->id]);
                    } else {
                        $relation->update(['trademark_id' => $trademark->id,'attachment_id' => $attachment->id]);
                    }
                } else {
                    if (!is_null($request->image)) {
                        $attachment = app('c_attachment')->store($request);
                        app('trademark_attachment')->create(['attachment_id' => $attachment->id ,'trademark_id' => $id]);
                    }
                }

                return redirect('dashboard/trademark')->with('success', 'Update infomation trademark success !!!');
            }else{
                return redirect()->back()->with('error', 'Update infomation trademark field !!!');
            }

        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'Update infomation trademark field !!!');
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
        $trademark = app('trademark')->where('id','=',$id)->firstorFail()->delete();
        // show messages implement
        return redirect('dashboard/trademark');
    }
}
