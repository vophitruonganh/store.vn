@extends('dashboard.dashboard')

@section('main-content')
<h3>THƯ VIỆN HÌNH ẢNH</h3>

@foreach ($attachments as $attachment)
<div class="col-lg-3">

		<input type="checkbox" value="{{ $attachment->id }}"><img  class="img-responsive" src="{{ URL::to('images',$attachment->url) }}" alt="">

</div>
@endforeach
<div class="col-lg-12 text-center">{{ $attachments->links() }}</div>
@overwrite
