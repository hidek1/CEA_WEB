@extends('layouts.app')

@section('content')
<div class="container">
    @if(Auth::check())
        @foreach($speeches as $speech)
        <div class="row">
            <div class="col-xs-6">
            <video src="{{ asset('/community_videos/'.$speech->name) }}"   controls width="100%">
            </div>
        </div>
        @endforeach
    @endif
</div>
@endsection