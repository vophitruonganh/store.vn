<!DOCTYPE html>
<html lang="en">
    @include('dashboard.includes.head')
<body>
@yield('header')

@section('navigation')
    @include('dashboard.includes.navigation')
@show
<div class="col-lg-3">
	@section('main-left')
	    @include('dashboard.includes.mainleft')
	@show
</div>
<div class="main-content col-lg-9">
	@section('main-content')
	    @include('dashboard.includes.maincontent')
	@show
</div>
<div class="col-lg-3">
	@section('main-right')
	    @include('dashboard.includes.mainright')
	@show
</div>
<div class="col-lg-12">
	@section('footer')
	    @include('dashboard.includes.footer')
	@show
</div>
</body>
</html>
