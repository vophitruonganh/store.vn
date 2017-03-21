@extends('dashboard.dashboard')
@section('main-content')
	@if(Session::has('success'))
		<p class="alert alert-success">{{ Session::get('success') }}</p>
	@endif
	@if(Session::has('error'))
		<p class="alert alert-danger">{{ Session::get('error') }}</p>
	@endif
	@if ($errors->has('name'))
        <span class="alert alert-danger">
            <strong class="">{{ $errors->first('name') }}</strong>
        </span>
    @endif
	{{-- <form action="{{ url('dashboard/trademark/create')}}" method="post" enctype="multipart/form-data"> --}}
	{!! Form::open(['route' => ['trademark.store'], 'method' => 'post','enctype' => 'multipart/form-data']) !!}
		<input class="col-lg-12" type="hidden" name="_token" value="{{ csrf_token() }}">
		<h3 class="text-center">ADD NEW TRADEMARK</h3>

		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Name</label>
			<input class="form-control" type="text" name="name" placeholder="ID Product">

		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">URL</label>
			<input class="form-control" type="text" name="url" placeholder="ID Product">
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Image</label>
			<input class="form-control" type="file" name="image" placeholder="ID Product">
		</div>

		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Active</label>
			<select class="form-control" name="active">
				<option value="1" selected>Khóa</option>
				<option value="0" selected>Mở Khóa</option>
				option
			</select>
		</div>
		<div class="col-lg-12"><label class="control-label" for=""></label></div>
		<div class="col-lg-12">

			<input class="form-control btn btn-primary" type="submit" value="TẠO DANH MỤC">
		</div>
	{{-- </form> --}}
	{!! Form::close() !!}
@overwrite