@extends('layout')

@section('css')
  <style type="text/css">
  .slider {
    width: 100%;
    height:auto;
    overflow: hidden;
    position: relative;
    display: inline
  }

  .slider .slideSet {
    position: absolute;
  }
   
  .slideSet {
    width: 250px; /* 削除 */
  }
   
  .slide {
    width: 100%;
    height:auto;
    overflow:hidden;
    float: left;
    display: inline
  }
  .slider-prev,
  .slider-next {
    margin-top: -15px;
    padding: 0;
    background: none;
    border: none;
    position: absolute;
    top: 50%;
    font-size: 30px;
    line-height: 1;
    cursor: pointer;
  }

  .slider-prev {
    left: -5px;
  }

  .slider-next {
    right: -5px;
  }
  </style>
  <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
@endsection

@section('content')
<div class="container">
  <div class="row pic_row">
    <div class="col-xs-12 col-md-12 col-lg-4">
      <h4 class="member_title">デイリーエッセイ</h4>
      <div class="slideshow-container">

      <div class="mySlides fade">
        <img src="images/mantoman.jpg" style="width:80%">
      </div>
      <div class="mySlides fade">
        <img src="images/mantoman2.jpg" style="width:80%">
      </div>
      <div class="mySlides fade">
        <img src="images/Junior group5.jpeg" style="width:80%">
      </div>
      <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
      </div>

    </div>
    </div>
    <div class="col-xs-12 col-md-12 col-lg-4">
      <h4 class="member_title">写真</h4>
      <div class="slider">
      <div class="slideSet">
        <div class="slide"><img src="images/mantoman.jpg" style="width:100%;"></div>
        <div class="slide"><img src="images/mantoman2.jpg" style="width:100%"></div>
        <div class="slide"><img src="images/Junior group5.jpeg" style="width:100%"></div>
      </div>
    </div>
  <button class="slider-prev"><i class="fa fa-arrow-circle-left"></i></button>
  <button class="slider-next"><i class="fa fa-arrow-circle-right"></i></button>
    </div>
    <div class="col-xs-12 col-md-12 col-lg-4">
      <h4 class="member_title">卒業スピーチ</h4>
      <video src="{{ asset('videos/student-interview-1.mp4') }}"   controls width="100%">
      </video>
    </div>
  </div>
</div>
<script>
(function(){
  var slideWidth = $('.slide').outerWidth();  // .slideの幅を取得して代入
  var slideNum = $('.slide').length;  // .slideの数を取得して代入
  var slideSetWidth = slideWidth * slideNum;  // .slideの幅×数で求めた値を代入
  $('.slideSet').css('width', slideSetWidth); // .slideSetのスタイルシートにwidth: slideSetWidthを指定

  var slideCurrent = 0; // 現在地を示す変数

  // アニメーションを実行する独自関数
  var sliding = function(){
    // slideCurrentが0以下だったら
    if( slideCurrent < 0 ){
      slideCurrent = slideNum - 1;

    // slideCurrentがslideNumを超えたら
    }else if( slideCurrent > slideNum - 1 ){  // slideCUrrent >= slideNumでも可
      slideCurrent = 0;

    }

    $('.slideSet').stop().animate({
      left: slideCurrent * -slideWidth
    });
  }

  // 前へボタンが押されたとき
  $('.slider-prev').click(function(){
    slideCurrent--;
    sliding();
  });

  // 次へボタンが押されたとき
  $('.slider-next').click(function(){
    slideCurrent++;
    sliding();
  });
}());
</script>
@endsection