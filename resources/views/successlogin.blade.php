@extends('layout')
@section('content')
	
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	             @if(isset(Auth::user()->email))
					
				 <h3 class="text-center">ウインターキャンプの様子の動画などを随時アップロードしていきます。</h3>
				  <div class="container">
				    <div class="row pic_row">
				      <div class="col-xs-6 col-md-6 col-lg-6">
				        <video src="{{ asset('videos/CEA-student2.mp4') }}"   controls width="100%">
				        </video>
				      </div>
				      <h3 class="movie_title">CEA卒業生インタビュー</h3>
				    </div>
				    <div class="row pic_row">
				      <div class="col-xs-6 col-md-6 col-lg-6">
				        <video src="{{ asset('videos/CEA-student1.mp4') }}"   controls width="100%">
				        </video>
				      </div>
				      <h3 class="movie_title">CEA卒業生インタビュー</h3>
				    </div>
				  </div>
				@else
					<script type="text/javascript">window.location ="/main";</script>
				@endif
	            </div>
        </div>
    </div>
@endsection

