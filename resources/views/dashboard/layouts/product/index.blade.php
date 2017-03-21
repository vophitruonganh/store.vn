@extends('dashboard.dashboard')

@section('main-content')
	<table class="table">
		<caption><h3>SẢN PHẨM - TẤT CẢ SẢN PHẨM</h3></caption>
		<thead>
			<tr>
				<th class="text-center">HÌNH ẢNH</th>
				<th class="text-center">TÊN SẢN PHẨM</th>
				<th class="text-center">NHÓM</th>

				<th class="text-center">THƯƠNG HIỆU</th>
				<th class="text-center">GIÁ</th>
				<th class="text-center">SỐ LƯỢNG</th>
				<th class="text-center">Sale</th>
				<th class="text-center">THAO TÁC</th>
			</tr>
		</thead>
		<tbody>
		@if(Session::has('success'))
			<p class="alert alert-success">{{ Session::get('success') }}</p>
		@endif
		@if(Session::has('error'))
			<p class="alert alert-danger">{{ Session::get('error') }}</p>
		@endif
		@foreach ($products as $product)

			<tr class="text-center">
				@if (sizeof($product->attachment) > 0)
					@foreach ($product->attachment as $attachment)
					<th class="text-center">
						<image style="max-width: 70px;" class="img-responsive" src="{{ URL::to('/images/'.$attachment->url) }}">
					</th>
					@endforeach
				@else
					<td class="text-center">
						<image style="max-width: 70px;" class="img-responsive" src="{{ URL::to('/images/logo.png') }}">
					</td>
				@endif
				<td class="text-center"><strong><a href="/dashboard/product/{{ $product->id }}/edit">{{ strtoupper($product->name) }}</a></strong></td>
				@foreach ($product->category as $category)
					<td class="text-center">{{ $category->name}}</td>
				@endforeach
				@foreach ($product->trademark as $trademark)
					<td class="text-center">{{ $trademark->name}}</td>
				@endforeach
				<td class="text-right">{{ number_format($product->price) }}</td>
				<td class="text-center">{{ $product->count }}</td>
				<th class="text-center">
					@if ($product->sale == true)
						Có
					@else
						Không
					@endif
				</th>
				<th class="text-center">
				{{-- 	<a class="btn btn-danger" href="{{ url('dashboard/product/delete/'.$product->id) }}">DELETE</a> --}}
				{{ Form::open(['route' => ['product.destroy', $product->id], 'method' => 'delete']) }}
					<a class="btn btn-success" href="/dashboard/product/{{ $product->id }}/edit"><span class="glyphicon glyphicon-wrench"></span></a>
					<button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
				{{ Form::close() }}
				</th>
			</tr>

		@endforeach
		</tbody>
	</table>
	<div class="col-lg-12 text-center">{{ $products->links() }}</div>

@overwrite
