@extends('layout')

@section('content')
  <h3 class="text-center">ウインターキャンプの様子の動画などを随時アップロードしていきます。</h3>
  <div class="container">
    <div class="row pic_row">
      <div class="col-xs-6 col-md-6 col-lg-6">
        <video src="videos/student-interview-1.mp4"   controls width="100%">
        </video>
      </div>
      <h3 class="movie_title">CEA卒業生インタビュー</h3>
    </div>
    <div class="row pic_row">
      <div class="col-xs-6 col-md-6 col-lg-6">
        <video src="videos/student-interview-2.mp4"   controls width="100%">
        </video>
      </div>
      <h3 class="movie_title">CEA卒業生インタビュー</h3>
    </div>
  </div>
@endsection