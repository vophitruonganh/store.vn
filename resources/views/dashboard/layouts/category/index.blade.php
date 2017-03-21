@extends('dashboard.dashboard')

@section('main-content')


	<table class="table">
		<caption><h3>SẢN PHẨM - TẤT CẢ SẢN PHẨM</h3></caption>
		<thead>
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">HÌNH ẢNH</th>
				<th class="text-center">TÊN DANH MỤC</th>
				<th class="text-center">ĐỊA CHỈ</th>

				{{-- <th class="text-center">TRẠNG THÁI</th> --}}
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
		@foreach ($categories as $category)
			<tr class="text-center">
				<th class="text-center">{{ $category->id }}</th>
				@if (!is_null($category->image))
					@foreach ($category->attachment as $attachment)
					<td class="text-center"><img class="img-responsive" style="max-width: 50px;" src="{{ URL::to('images',$attachment->url) }}" alt=""></td>
					@endforeach
				@else
						<td class="text-center"><img class="img-responsive" style="max-width: 50px;" src="{{ URL::to('images/logo.png') }}" alt=""></td>
				@endif

				<th class="text-center"><strong><a href="{{ url('dashboard/category/'.$category->url.'/edit') }}">{{ strtoupper($category->name) }}</a></strong></th>
				<td class="text-center">{{ $category->url }}</td>
				{{-- <td class="text-center">@if ($category->active == 1)Mở Khóa @else Khóa @endif</td> --}}
				{!! Form::open(['route'=>['category.destroy',$category->id],'method' => 'delete']) !!}
				<td class="text-center">
					<input class="btn btn-danger" type="submit" value="DELETE">
				</td>
				{!! Form::close() !!}
			</tr>
		@endforeach
		</tbody>
	</table>
	<div class="col-lg-12 text-center">{{ $categories->links() }}</div>
@overwrite
