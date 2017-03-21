@extends('dashboard.dashboard')
@section('main-content')
	@if(Session::has('success'))
		<p class="alert alert-success">{{ Session::get('success') }}</p>
	@endif
	@if(Session::has('error'))
		<p class="alert alert-danger">{{ Session::get('error') }}</p>
	@endif
	{!! Form::open(['route' => ['trademark.update',$trademark->id], 'method' => 'put','enctype' => 'multipart/form-data']) !!}
	<input class="col-lg-12" type="hidden" name="_token" value="{{ csrf_token() }}">
	{{-- <input class="col-lg-12" type="hidden" name="id" value="{{ $trademark->id }}"> --}}
		<h3 class="text-center">CẬP NHẬT THÔNG TIN HÃNG SẢN XUẤT</h3>
		<div class="col-lg-6 form-group {{ $errors->has('name') ? ' has-error' : '' }}">
			<label class="control-label" for="trademark-name">Name</label>
			<input class="form-control" type="text" name="name" placeholder="trademark Name" value="{{ $trademark->name or old('name')}}">
			@if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
		</div>
		<div class="col-lg-6 form-group {{ $errors->has('url') ? ' has-error' : '' }}">
			<label class="control-label" for="trademark-name">URL</label>
			<input class="form-control" type="text" name="url" placeholder="trademark Url" value="{{ $trademark->url}}">
			@if ($errors->has('url'))
                <span class="help-block">
                    <strong>{{ $errors->first('url') }}</strong>
                </span>
            @endif
		</div>
		<div class="col-lg-6 form-group {{ $errors->has('image') ? ' has-error' : '' }}">
			<label class="control-label" for="trademark-name">Image</label>
			<input class="form-control" type="file" name="image" placeholder="trademark Image Url" value="{{ $trademark->image }}">
			@if ($errors->has('image'))
                <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
            @endif
		</div>
		<div class="col-lg-6 form-group {{ $errors->has('active') ? ' has-error' : '' }}">
			<label class="control-label" for="trademark-name">Active</label>
			<select class="form-control" name="active">
				<option value="0" @if ($trademark->active == 0){{ 'selected' }}@endif>Khóa</option>
				<option value="1" @if ($trademark->active == 1){{ 'selected' }}@endif>Mở Khóa</option>
				option
			</select>
			@if ($errors->has('active'))
                <span class="help-block">
                    <strong>{{ $errors->first('active') }}</strong>
                </span>
            @endif
		</div>
		<div class="col-lg-12"><label class="control-label" for=""></label></div>
		<div class="col-lg-12">

			<input class="form-control btn btn-primary" type="submit" value="CẬP NHẬT THÔNG TIN HÃNG SẢN XUẤT">
		</div>
	{!! Form::close() !!}
@overwrite