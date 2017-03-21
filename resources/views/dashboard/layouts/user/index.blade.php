@extends('dashboard.dashboard')

@section('main-content')
	<table class="table">
		<caption><h3>SẢN PHẨM - TẤT CẢ SẢN PHẨM</h3></caption>
		<thead>
			<tr>
				{{-- <th class="text-center">ID</th> --}}
				<th class="text-center">HÌNH ẢNH</th>
				<th class="text-center">HỌ TÊN</th>
			{{-- 	<th class="text-center">NGÀY SINH</th>
				<th class="text-center">ĐỊA CHỈ</th> --}}
			{{-- 	<th class="text-center">QUẬN</th>
				<th class="text-center">HUYỆN</th> --}}
				<th class="text-center">EMAIL</th>
				<th class="text-center">STATUS</th>
				<th class="text-center">QUYỀN</th>
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
		@foreach ($users as $user)
			<tr>
				{{-- <th class="text-center">{{ $user->id }}</th> --}}
				@if (sizeof($user->attachment) >0)
					@foreach ($user->attachment as $attachment)
					<th class="text-center"><img style="max-width: 70px;" class="img-responsive" src="{{ URL::to('images',$attachment->url) }}" alt=""></th>
					@endforeach
				@else
					<th class="text-center"><img style="max-width: 70px;" class="img-responsive" src="{{  URL::to('images/logo.png') }}" alt=""></th>
				@endif

				<th class="text-center"><strong><a href="{{ url('dashboard/user/'.$user->id.'/edit/') }}">{{ strtoupper($user->firstname .' '. $user->lastname ) }}</a></strong></th>
				{{-- <td class="text-center">{{ $user->dob }}</td>
				<td class="text-center">{{ $user->address }}</td> --}}
				{{-- <td class="text-center">{{ $user->district->name }}</td> --}}
				{{-- @foreach ($user->district->province as $province)
				<td class="text-center">{{ $province->name }}</td>
				@endforeach --}}
				<td class="text-center">{{ $user->email }}</td>
				<td class="text-center">@if ($user->status == 1)Online @else Offline @endif</td>
				<td class="text-center">{{ $user->role->name }}</td>
				<td class="text-center">
				{!! Form::open(['route' => ['user.destroy',$user->id], 'method' => 'delete']) !!}
					<input class="btn btn-danger" type="submit" value="DELETE">
				{!! Form::close() !!}
				</td>
			</tr>

		@endforeach

		</tbody>
	</table>
	<div class="col-lg-12 text-center">{{ $users->links() }}</div>
@overwrite
