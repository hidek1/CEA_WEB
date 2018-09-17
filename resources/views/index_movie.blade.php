@extends('layout')

@section('content')
  <h3 class="text-center">{{ __('messages.Vi_info') }}</h3>
  <div class="container">
    <div class="row pic_row">
      <div class="col-xs-6 col-md-6 col-lg-6">

        <video src="{{ url('videos/student-interview-1.mp4') }}"   controls width="100%">
        </video>
      </div>
      <h3 class="movie_title">{{ __('messages.Vi_content1') }}</h3>
    </div>
    <div class="row pic_row">
      <div class="col-xs-6 col-md-6 col-lg-6">
        <video src="{{ url('videos/student-interview-2.mp4') }}"   controls width="100%">
        </video>
      </div>
      <h3 class="movie_title">{{ __('messages.Vi_content2') }}</h3>
    </div>
  </div>
@endsection