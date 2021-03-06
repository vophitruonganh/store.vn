@extends('dashboard.dashboard')
@section('main-content')
	@if(Session::has('success'))
		<p class="alert alert-success">{{ Session::get('success') }}<span aria-hidden="true">&times;</span></p>
	@endif

	@if(Session::has('error'))
		<p class="alert alert-danger">{{ Session::get('error') }}<span aria-hidden="true">&times;</span></p>
	@endif
	
	<div class="col-lg-12">
		<h3 class="text-center">THÔNG TIN SẢN PHẨM</h3>
	</div>
	
	{!! Form::open(['route' => ['product.update',$product->id],'method' => 'PUT','enctype' => 'multipart/form-data']) !!}
	<div class="col-lg-12">
		<div class="col-lg-6 form-group {{ $errors->has('email') ? ' has-error' : '' }}">
			<label class="control-label" for="product-name">ID</label>
			<input class="form-control"  disabled  type='text' name="id" placeholder="Product ID" value="{{ $product->id or old('id')}}">
		</div>
		<div class="col-lg-6 form-group {{ $errors->has('email') ? ' has-error' : '' }}">
			<label class="control-label" for="product-name">Name</label>
			<input class="form-control" type="text" name="name" placeholder="Product Name" value="{{ $product->name or old('name')}}">
			@if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
		</div>
		<div class="col-lg-6 form-group {{ $errors->has('url') ? ' has-error' : '' }}">
			<label class="control-label" for="product-name">URL</label>
			<input class="form-control" type="text" name="url" placeholder="Product Url" value="{{ $product->url}}">
			@if ($errors->has('url'))
                <span class="help-block">
                    <strong>{{ $errors->first('url') }}</strong>
                </span>
            @endif
		</div>
		<div class="col-lg-6 form-group {{ $errors->has('image') ? ' has-error' : '' }}">
			<label class="control-label" for="product-name">Image</label>
			<input class="form-control" type="file" name="image" placeholder="Product Image Url" value="{{ $product->image }}">
			@if ($errors->has('image'))
                <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
            @endif
		</div>
		<div class="col-lg-6 form-group {{ $errors->has('price') ? ' has-error' : '' }}">
			<label class="control-label" for="product-name">Price</label>
			<input class="form-control" type="text" name="price" placeholder="Product Price" value="{{ round($product->price) }}">
			@if ($errors->has('price'))
                <span class="help-block">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
            @endif
		</div>
		<div class="col-lg-6 form-group {{ $errors->has('count') ? ' has-error' : '' }}">
			<label class="control-label" for="product-name">Number Count</label>
			<input class="form-control" type="text" name="count" placeholder="Product Count" value="{{ $product->count }}">
			@if ($errors->has('count'))
                <span class="help-block">
                    <strong>{{ $errors->first('count') }}</strong>
                </span>
            @endif
		</div>
		<div class="col-lg-6 form-group {{ $errors->has('sale') ? ' has-error' : '' }}">
			<label class="control-label" for="product-name">Sale</label>
			<select class="form-control" name="sale">
				<option value="1" @if ($product->sale == 1){{ 'selected' }}@endif>Sale</option>
				<option value="0" @if ($product->sale == 0){{ 'selected' }}@endif>Not Sale</option>
				option
			</select>
			@if ($errors->has('sale'))
                <span class="help-block">
                    <strong>{{ $errors->first('sale') }}</strong>
                </span>
            @endif
		</div>
		<div class="col-lg-6 form-group {{ $errors->has('status') ? ' has-error' : '' }}">
			<label class="control-label" for="product-name">Status</label>
			<select class="form-control" name="status">
				<option value="1" @if ($product->status == 1){{ 'selected' }}@endif>Còn Hàng</option>
				<option value="0" @if ($product->status == 0){{ 'selected' }}@endif>Hết Hàng</option>
				option
			</select>
			@if ($errors->has('status'))
                <span class="help-block">
                    <strong>{{ $errors->first('status') }}</strong>
                </span>
            @endif
		</div>
		<div class="col-lg-6 form-group {{ $errors->has('active') ? ' has-error' : '' }}">
			<label class="control-label" for="product-name">Active</label>
			<select class="form-control" name="active">
				<option value="1" @if ($product->active == 1){{ 'selected' }}@endif>Mở Khóa</option>
				<option value="0" @if ($product->active == 0){{ 'selected' }}@endif>Khóa</option>
				option
			</select>
			@if ($errors->has('active'))
                <span class="help-block">
                    <strong>{{ $errors->first('active') }}</strong>
                </span>
            @endif
		</div>
		<div class="col-lg-6 form-group {{ $errors->has('trademark') ? ' has-error' : '' }}">
			<label class="control-label" for="product-name">Category</label>
			<select class="form-control" name="category">
				@foreach ($categories as $category)
					<option value="{{ $category->id }}" @if ($product->category_id == $category->id){{ 'selected' }}@endif>{{ $category->name}}</option>
				@endforeach

			</select>
			@if ($errors->has('trademark'))
                <span class="help-block">
                    <strong>{{ $errors->first('trademark') }}</strong>
                </span>
            @endif
		</div>
		<div class="col-lg-6 form-group {{ $errors->has('trademark') ? ' has-error' : '' }}">
			<label class="control-label" for="product-name">Trademark</label>
			<select class="form-control" name="trademark">
				@foreach ($trademarks as $trademark)
					<option value="{{ $trademark->id }}" @if ($product->trademark_id == $trademark->id){{ 'selected' }}@endif>{{ $trademark->name}}</option>
				@endforeach

			</select>
			@if ($errors->has('trademark'))
                <span class="help-block">
                    <strong>{{ $errors->first('trademark') }}</strong>
                </span>
            @endif
		</div>
	</div>

		{{-- <div class="col-lg-12">
			<h3 class="text-center">THÔNG TIN CHI TIẾT SẢN PHẨM</h3>
		</div>
		<div class="col-lg-12">
			<div class="col-lg-6 form-group {{ $errors->has('email') ? ' has-error' : '' }}">
				<label class="control-label" for="product-name">Name</label>
				<input class="form-control" type="text" name="name" placeholder="Product Name" value="{{ $product->name or old('name')}}">
				@if ($errors->has('name'))
	                <span class="help-block">
	                    <strong>{{ $errors->first('name') }}</strong>
	                </span>
	            @endif
			</div>
		</div> --}}
	<input class="form-control btn btn-primary" type="submit" value="CẬP NHẬT THÔNG TIN SẢN PHẨM">
	</div>
	{!! Form::close() !!}


@overwrite