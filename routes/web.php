<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('welcome',function(){
	return view('welcome');
});

Route::any('images/{image?}', function($image){
	return Response::make(File::get(storage_path().'/app/public/products/'.$image));
});

Route::get('admin', function () {
    return view('layouts.dashboard.admin_template');
});

Route::Auth();
Route::group(['namespace' => 'Auth', 'middleware' => 'auth','prefix' => 'dashboard'],function(){
	Route::resource('user','UserController');
});

Route::group(['namespace' => 'Backend','middleware' => 'auth' , 'prefix' => 'dashboard'],function(){
	Route::get('/', 'DashboardController@index');
	Route::resource('product','ProductController');
	Route::resource('category','CategoryController');
	Route::resource('trademark','TrademarkController');
	Route::resource('post','PostController');
	Route::resource('attachment','AttachmentController');
	Route::resource('ship','ShipController');
	Route::resource('order','OrderController');
});

Route::group(['namespace' => 'Frontend','middleware' => 'web'],function(){
	Route::resource('/','FrontendController',['only' => ['index', 'show']]);
	Route::resource('collection','ProductController',['only' => ['index', 'show']]);
	Route::resource('collection/category','ProductCategoryController',['only' => ['index', 'show']]);
	Route::resource('collection/trademark','ProductTrademarkController',['only' => ['index', 'show']]);
	Route::resource('/collection/order','OrderController',['only' => ['index', 'show','store','create','update','destroy']]);
	Route::resource('about','AboutController',['only' => ['index', 'show']]);
	Route::resource('contact','ContactController',['only' => ['index', 'show']]);
	Route::resource('user','UserController',['only' => ['index', 'show']]);
});

