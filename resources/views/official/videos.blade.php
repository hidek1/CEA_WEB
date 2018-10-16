@extends('layouts.app')

@section('content')
	@if(Auth::check())
		<div class="container">
		    @foreach($speeches as $speech)
		    <div class="row">
		        <div class="col-xs-6">
		        <video src="{{ asset('/community_videos/'.$speech->name) }}"   controls width="100%">
		        </div>
		    </div>
		    @endforeach
		</div>
	@endif
@endsection