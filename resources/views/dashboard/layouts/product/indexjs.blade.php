@extends('dashboard.dashboard')

@section('main-content')
	  <script src="{{ asset('js/controllers/productController.js') }} "></script> <!-- load our controller -->
        <script src=" {{ asset('js/services/productService.js') }} "></script> <!-- load our service -->
        <script src=" {{ asset('js/app.js') }}"></script> <!-- load our application -->
	<table class="table">
		<caption><h3>SẢN PHẨM - TẤT CẢ SẢN PHẨM</h3></caption>
		<thead>
			<tr>
				{{-- <th class="text-center">ID</th> --}}
				<th class="text-center">HÌNH ẢNH</th>
				<th class="text-center">TÊN SẢN PHẨM</th>
				<th class="text-center">NHÓM</th>

				<th class="text-center">THƯƠNG HIỆU</th>
				<th class="text-center">GIÁ</th>
				<th class="text-center">SỐ LƯỢNG</th>
				<th class="text-center">Sale</th>
				<th class="text-center">Active</th>
				{{-- <th class="text-center">THAO TÁC</th> --}}
			</tr>
		</thead>
		<tbody ng-app="productApp" ng-controller="productController">
		@if(Session::has('success'))
			<p class="alert alert-success">{{ Session::get('success') }}</p>
		@endif
		@if(Session::has('error'))
			<p class="alert alert-danger">{{ Session::get('error') }}</p>
		@endif

			<tr class="text-center">
					<th class="text-center">
						<image style="max-width: 70px;" class="img-responsive" src="aaa">
					</th>


				<td><input type="text" ng-model="ProductData.name"></td>
				<td class="text-center"><strong><a href="">aaa</a></strong></td>

					<td class="text-center">aaa</td>

					<td class="text-center">aaaa</td>

				<td class="text-right"></td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<td class="text-center"></td>
				<th class="text-center">
					{{-- <a class="btn btn-danger" href="">DELETE</a> --}}
					<input type="submit" >
				</th>
			</tr>
		</tbody>
	</table>


@overwrite
