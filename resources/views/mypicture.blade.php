@extends('dashboard')
@section('content')
 <div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<ul>
			@if(Auth::check())
			@foreach($mypictures as $picture)
			@if($picture->contact_id == Auth::user()->id)
				<li class="pull-left" style="margin-right:10px;">
					<img src="{{ asset('storage/upload/'.$picture->name) }}" width="250" height="150">
				</li>
			@endif
			@endforeach
			@endif
			</ul>
	</div>
@endsection