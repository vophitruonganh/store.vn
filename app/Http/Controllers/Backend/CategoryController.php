<?php

namespace Xstore\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Xstore\Http\Requests\RequestCategory;
use Xstore\Http\Controllers\Controller;
use Session;
class CategoryController extends Controller
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
        return view('dashboard.layouts.category.index')
                ->with('categories',app('category')->paginate(16));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.layouts.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestCategory $request)
    {
         try {
            //create new category
            $category = app('category')->create($request->all());

            // upload file
            $image = app('c_attachment')->store($request);
            if ($image != false) {
                // insert infomation product_attachment table
                app('category_attachment')->create([
                    'category_id' => $category->id,
                    'attachment_id' => $image->id,
                ]);
                // send messages success

            }
            return redirect('dashboard/category')->with('success', 'Create Product Success !!!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Update Infomation Product Field !!!'); // send messages error;
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
        if(is_null($id)){
            return view('dashboard.layouts.category.index');
        }else{
            return view('dashboard.layouts.category.index')
                    ->with('category',app('category')->where('id','=',$id)->firstOrFail());
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
        return view('dashboard.layouts.category.edit')
            ->with('category',app('category')->where('id','=',$id)->orWhere('url','=',$id)->firstOrFail());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$key)
    {
        try {
            $category = app('category')->where('id','=',$key)->firstOrFail();
            if ($category->update($request->all())) {
                if ($request->image != null) {
                    $image = app('c_attachment')->store($request);
                    $attachment = app('category_attachment')->where('category_id','=',$category->id)->first();
                    if (sizeof($attachment) == 1) {
                        $attachment->update(['attachment_id' => $image->id]);
                    } else {
                        app('category_attachment')
                        ->create(['category_id' => $key, 'attachment_id' => $image->id ]);
                    }
                }
            }
            return redirect('dashboard/category')->with('success','Update Category Success !!!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error','Update Category Fail !!!');
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
            $category = app('category')->where('id','=',$id)->firstOrFail();

            if (sizeof($category) == 1) {
                app('category_attachment')->where('category_id','=',$category->id)->delete();
                $category->delete();
                return redirect('dashboard/category')->with('success','Delete Category Complate !!!');
            }else{
                return redirect()->back()->with('error','Cant not delete category !!!');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error',$e);
        }
    }
}
