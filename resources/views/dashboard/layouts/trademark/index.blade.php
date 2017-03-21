@extends('dashboard')

@section('main-content')
	<table class="table">
		<caption><h3>SẢN PHẨM - TẤT CẢ SẢN PHẨM</h3></caption>
		<thead>
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">HÌNH ẢNH</th>
				<th class="text-center">TÊN DANH MỤC</th>
				<th class="text-center">TRẠNG THÁI</th>
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
		@foreach ($trademarks as $trademark)
			<tr>
				<th class="text-center">{{ $trademark->id }}</th>
				@if (sizeof($trademark->attachment) >0)
					@foreach ($trademark->attachment as $attachment)
					<th class="text-center"><img style="max-width: 70px;" class="img-responsive" src="{{ URL::to('images',$attachment->url) }}" alt=""></th>
					@endforeach
				@else
					<th class="text-center"><img style="max-width: 70px;" class="img-responsive" src="{{  URL::to('images/logo.png') }}" alt=""></th>
				@endif

				<th class="text-center"><strong><a href="{{ url('dashboard/trademark/'.$trademark->url.'/edit/') }}">{{ strtoupper($trademark->name) }}</a></strong></th>
				<td class="text-center">@if ($trademark->active == 1)Mở Khóa @else Khóa @endif</td>
				<td class="text-center">
				{!! Form::open(['route' => ['trademark.destroy',$trademark->id], 'method' => 'delete']) !!}
					<input class="btn btn-danger" type="submit" value="DELETE">
				{!! Form::close() !!}
				</td>
			</tr>

		@endforeach

		</tbody>
	</table>
	<div class="col-lg-12 text-center">{{ $trademarks->links() }}</div>
@overwrite
