<?php

namespace Xstore\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Xstore\Http\Controllers\Controller;
use Xstore\Http\Requests\RequestUploadFile;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\UploadedFile;
use Xstore\Http\Requests\RequestProduct;
use Auth,Response,Storage,Session,Image,DB;
// use Storage;
// use Session;
// use Image;
class ProductController extends Controller
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
        return view('dashboard.layouts.product.index')
                ->with('products',app('product')->where('active','=',true)->paginate(8));
    }

    public function indexJS(){
        return Response::json(app('product')->where('active','=',1)->limit(200)->get());
    }

    public function showLock()
    {
        return view('dashboard.layouts.product.index')
                ->with('products',app('product')->where('active','=',false)->paginate(16));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.layouts.product.create')
                ->with('trademarks',app('trademark')->where('active','=',true)->orderBy('name')->get())
                ->with('categories',app('category')->where('active','=',true)->orderBy('name')->get());
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
            // create array infomation product
            $product = [
                'name' => $request->name,
                'url' => str_ireplace(' ', '-',strtolower($request->name)),
                'price' => $request->price,
                'sale' => $request->sale,
                'count' => $request->count,
                'status' => $request->status,
                'active' => $request->active,
            ];


            DB::beginTransaction();

            $image = app('c_attachment')->store($request);
            //create product
            $product = app('product')->create($product);
            //create relation trademark
            $product_trademark = app('product_trademark')->create([
                'product_id' => $product->id,
                'trademark_id' => $request->trademark,
            ]);

            $product_category = app('product_category')->create([
                'product_id' => $product->id,
                'category_id' => $request->category,
            ]);

            // insert infomation product_attachment table
            if (sizeof($image) ==1) {
                app('product_attachment')->create(['product_id' => $product->id, 'attachment_id' => $image->id]);
            }
            DB::commit();
            return redirect('dashboard/product')->with('success', 'Create Product Success !!!'); // send messages success;

        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Update Infomation Product Field !!!');
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
        if(Request::url() == 'dashboard'){
            return view('dashboard/product/edit')->with(app('product')->where('id','=',$id)->firstorFail());
        }else{
            return view('collection/detail')
                ->with(app('product')
                ->where('id','=',$id)
                // ->where('active','=',true)
                ->firstorFail());
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
        return view('dashboard.layouts.product.edit')
            // send list product to view
            ->with('product',app('product')->where('id','=',$id)->orWhere('url','=',$id)->firstorFail())
            // send list trademark to view
            ->with('trademarks',app('trademark')->all())
            //send list category to view edit
            ->with('categories',app('category')->all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestProduct $request, $key)
    {
        try {
            DB::beginTransaction();
            // get product
            $product = app('product')->where('id','=',$key)->firstOrFail();

            $product_category = app('product_category')
                                ->where('product_id','=',$key)
                                ->orWhere('category_id','=',$key)->firstOrFail();

            $product_trademark = app('product_trademark')
                                ->where('product_id','=',$key)
                                ->orWhere('trademark_id','=',$key)->firstOrFail();


            if ($product != null && $product_category != null || $product_trademark != null) {
                $product->update($request->all());
                $product_category->update(['category_id' => $request->category,'product_id' => $product->id]);
                $product_trademark->update(['trademark_id' => $request->trademark,' ' => $product->id] );
            }

            $image = app('c_attachment')->store($request);

            //UPDATE IMAGES ATTACHMENT
            if ($image != false) {
                $product_attachment = app('product_attachment')->where('product_id','=',$key)->first();
                if (sizeof($product_attachment) == 1) {
                    $product_attachment->update(['product_id' => $product->id,'attachment_id' => $image->id]);
                }else{
                    app('product_attachment')->create(['product_id' => $product->id,'attachment_id' => $image->id]);
                }
            }
            DB::commit();
            // redirect page show list product
            return redirect('dashboard/product')->with('success', 'Update Infomation Product Success !!!');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    public function destroy($key)
    {
        try {
            $product = app('product')->where('id','=',$key)->orWhere('url','=',$key)->firstorFail(); // get product
            DB::beginTransaction();
                $trademark = app('product_trademark')->where('product_id','=',$product->id)->first();
                $category = app('product_category')->where('product_id','=',$product->id)->first();
                $product_attachment = app('product_attachment')->where('product_id','=',$product->id)->first();
                 // delete product

                if (isset($trademark)) {
                    $trademark->delete();
                }

                if (isset($category)) {
                    $category->delete();
                }

                if (isset($product_attachment)) {
                    $product_attachment->delete();
                }

                if (isset($product)) {
                    $product->delete();
                }

            DB::commit();


            return redirect('dashboard/product')->with('success', 'Delete Product Success !!!'); // send messages success
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage()); // send messages error // redirect page previoust
        }
    }

    private function fileUpload(Request $request)
    {
        try {
            if ($request->file('image')) {
                $path = Storage::putFile('public/products/', $request->file('image'));
                $image = app('attachment')->create([
                    'user_id' => Auth::user()->id,
                    'mime_type' => Storage::mimeType($path),
                    'url' => explode('/',$path)[sizeof(explode('/', $path))-1],
                ]);
                return $image;
            }else{
               return false;
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Delete Product Field !!!'); // send messages error // redirect page
        }
    }

}
