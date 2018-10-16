@extends('layout')
@section('content')
<div id="slide">
  <ul>
    <li><a href=""><img src="images/mantoman.jpg" alt="" width="640" height="400" /></a></li>
    <li><a href=""><img src="images/mantoman2.jpg" alt="" width="640" height="400" /></a></li>
    <li><a href=""><img src="images/Juniorgroup5.jpeg" alt="" width="640" height="400" /></a></li>
  </ul>
</div>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<div class="clearfloat">&nbsp;</div>
  <div class="container">
    <div class="row ccc" >
      <div class="col-md-1">
      </div>
      <div class="col-md-10 gallery_controller">
        <div class="row">
          <div class="gallery col-md-4">
            <div class="desc">{{ __('messages.Price') }}</div>
            <img class="zoomable" src="{{ asset('images/price.png') }}" alt="teachers">
          </div>
          <div class="gallery col-md-4">
            <div class="desc">{{ __('messages.Schedule') }}</div>
            <img class="zoomable" src="{{ asset('images/schedule.png') }}" alt="teachers">
          </div>
          <div class="gallery col-md-4">
            <div class="desc">{{ __('messages.Facility') }}</div>
            <img class="zoomable" src="{{ asset('images/facilities.png') }}" alt="teachers">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row ccc" >
      <div class="col-md-1">
      </div>
      <div class="col-md-10 gallery_controller">
        <div class="gallery col-md-4">
          <div class="desc">{{ __('messages.Meal') }}</div>
            <img src="{{asset('images/meal.jpg') }}" class="zoomable" alt="5Terre">
        </div>
        <div class="gallery col-md-4">
          <div class="desc">{{ __('messages.Picture') }}</div>
            <a target="_blank" href="img_forest.jpg">
            </a>
        </div>
{{--         <div class="gallery">
          <div class="desc">{{ __('messages.experience') }}</div>
          <a target="_blank" href="img_lights.jpg">
          </a>
        </div> --}}
      </div>
    </div>
  </div>
<div class="clearfloat">&nbsp;</div>
<div class="container">
  <div class="row">
    <div class="col-lg-9">
      <span class="archive_head--top ">{{ __('messages.NewArticles') }}</span>
      @foreach($blogs as $blog)
      <div class="row">
        <div class="col-md-3 col-xs-4">
              <img src="{{asset('images/blog/'.$blog->blog_img)}}" class="archive__img img-responsive">           
        </div>
        <div class="col-md-9  col-xs-8">
              <a href="allblog/{{$blog->id}}" class="title_a" target="_blog"><span class="archive__title">{{ str_limit($blog->title,20)}}</span></a>
              <p>
                <h5 class="string_content">{{ str_limit($blog->subcontent1, 50, '...') }}</h5>
                <span class="archive__date">{{ str_limit($blog->created_at, 10)}}</span>
                <a href="allblog/{{$blog->id}}" target="_blog"><span class="archive__cat">View More?</span></a>
              </p>
        </div>
      </div>
       @endforeach
       {{ $blogs->links() }}
    </div>
    <div class="col-lg-3">
      <span class="archive_head--top ">{{ __('messages.experience') }}</span>
      @foreach($experiences as $experience)
           <a href="experience/{{ $experience->id }}/show" style="color: black;">{{ $experience->name }}</a><br>
      @endforeach
    </div>
  </div>
</div>
<script type="text/javascript">
$(function(){
  // 設定
  var $width =640; // 横幅
  var $height =400; // 高さ
  var $interval = 3000; // 切り替わりの間隔（ミリ秒）
  var $fade_speed = 1000; // フェード処理の早さ（ミリ秒）
  $("#slide ul li").css({"position":"relative","overflow":"hidden","width":$width,"height":$height});
  $("#slide ul li").hide().css({"position":"absolute","top":0,"left":0});
  $("#slide ul li:first").addClass("active").show();
  setInterval(function(){
  var $active = $("#slide ul li.active");
  var $next = $active.next("li").length?$active.next("li"):$("#slide ul li:first");
  $active.fadeOut($fade_speed).removeClass("active");
  $next.fadeIn($fade_speed).addClass("active");
  },$interval);
});
</script>
@endsection