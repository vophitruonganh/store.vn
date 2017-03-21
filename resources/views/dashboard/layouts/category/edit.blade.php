@extends('dashboard.dashboard')
@section('main-content')
	{!! Form::open(['route' => ['category.update',$category->id], 'method' => 'put','enctype' => 'multipart/form-data']) !!}
	{{-- <form action="{{ URL::to('dashboard/category/edit',$category->id)}}" method="post" enctype="multipart/form-data"> --}}
	<input class="col-lg-12" type="hidden" name="_token" value="{{ csrf_token() }}">
	<input class="col-lg-12" type="hidden" name="id" value="{{ $category->id }}">
		<h3 class="text-center">DANH MỤC, CẬP NHẬT</h3>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Name</label>
			<input class="form-control" type="text" name="name" value="{{ $category->name }}" placeholder="ID Product">
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">URL</label>
			<input class="form-control" type="text" name="url"  value="{{ $category->url }}" placeholder="ID Product">
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Image</label>
			@if (sizeof($category->attachment) == null)
				<input class="form-control" type="file" name="image" placeholder="ID Product">
			@else
			{{-- {{ dd($category->attachment) }} --}}
				@foreach ($category->attachment as $attachment)
				<input class="form-control" type="file" name="image"  placeholder="{{ $attachment->url }}">
				@endforeach
			@endif

		</div>

		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Active</label>
			<select class="form-control" name="active">
				<option value="0" @if ($category->status == false) selected @endif>Khóa</option>
				<option value="1" @if ($category->status == true) selected @endif>Mở Khóa</option>
			</select>
		</div>
		<div class="col-lg-12"><label class="control-label" for=""></label></div>
		<div class="col-lg-12">
			<input class="form-control btn btn-primary" type="submit" value="TẠO DANH MỤC">
		</div>

	{{-- </form> --}}
	{!! Form::close() !!}
@overwrite