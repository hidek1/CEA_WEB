@extends('layout')

@section('css')
<style type="text/css">
.slider {
  width: 300px;
  height: 200px;
  overflow: hidden;
  position: relative;
}

.slider .slideSet1 {
  position: absolute;
}

.slideSet2 {
  position: absolute;
}

.slider .slide1 {
  width: 300px;
  height: 200px;
  float: left;
}

.slide2 {
  width: 300px;
  height: 200px;
  float: left;
}

.slider-prev1,
.slider-next1 {
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

.slider-prev1 {
  left: 0px;
}

.slider-next1 {
  right: 0px;
}

.slider-prev2,
.slider-next2 {
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

.slider-prev2 {
  left: 0px;
}

.slider-next2 {
  right: 0px;
}

#largeImg{
/*    display: none;  // dismiss*/
    z-index: 1;
}

#back-curtain{
    background: rgba(0, 0, 0, 0.5); // ③透過率５０％
    display: none;
    position: absolute;
    left: 0;
    top: 0;
    z-index: 1;
}

</style>
<link rel="stylesheet" type="text/css" href="{{asset('https://use.fontawesome.com/releases/v5.0.6/css/all.css')}}">
@endsection

@section('content')
<div id="back-curtain"></div>
<div id="largeImg"><img width="800" src="images/mantoman.jpg"></div>
<div class="container">
  <div class="row pic_row">
    <div class="col-xs-12 col-md-12 col-lg-4">
      <h4 class="member_title">デイリーエッセイ</h4>
      <div class="slider">
      <div class="slideSet1">
        <div class="slide1 gallery1"><img class="img-responsive" src="images/mantoman.jpg" style="width:100%;"></div>
        <div class="slide1"><img class="img-responsive" src="images/mantoman2.jpg" style="width:100%"></div>
        <div class="slide1"><img class="img-responsive" src="images/Junior group5.jpeg" style="width:100%"></div>
      </div>
      <button class="slider-prev1"><i class="fas fa-angle-left"></i></button>
      <button class="slider-next1"><i class="fas fa-angle-right"></i></button>
      </div>
    </div>
    <div class="col-xs-12 col-md-12 col-lg-4">
      <h4 class="member_title">写真</h4>
      <div class="slider">
      <div class="slideSet2">
        <div class="slide2"><img src="images/mantoman.jpg" style="width:100%;"></div>
        <div class="slide2"><img src="images/mantoman2.jpg" style="width:100%"></div>
        <div class="slide2"><img src="images/Junior group5.jpeg" style="width:100%"></div>
      </div>
      <button class="slider-prev2"><i class="fas fa-angle-left"></i></button>
      <button class="slider-next2"><i class="fas fa-angle-right"></i></button>
    </div>
    </div>
    <div class="col-xs-12 col-md-12 col-lg-4">
      <h4 class="member_title">卒業スピーチ</h4>
      <video src="{{ asset('videos/student-interview-1.mp4') }}"   controls width="100%">
      </video>
    </div>
  </div>
</div>
<script>
var img_width;
var img_height;
var img_ratio;
 
jQuery.event.add(window, "load", function(){
    var el = $('#largeImg img');
        var img = new Image();
        img.src = el.attr('src');
        img_width = img.width; 
        img_height = img.height;
    img_ratio = img_height/img_width;  
    });
 
$('.gallery1 img').click(function(e) {
    e.preventDefault();
 
    disp();
    $('#largeImg img').fadeIn();
});

jQuery.event.add(window, "resize", function(){disp();});
 
$('#back-curtain, #largeImg').click(function() {
    $('#largeImg img').fadeOut('slow', function() {$('#back-curtain').hide();});
});
 
function disp(){
    $('#back-curtain')
        .css({
            'width' : $(window).width(),  
            'height': $(window).height() 
        })
        .show();
 
    var win_ratio = $(window).height() / $(window).width();
    var w;  var h;
    const margin=50;
 
    if(img_ratio > win_ratio ){ 
        h= $(window).height()-2*margin;
        if( h < $(window).height() ) h=$(window).height()-2*margin;
        w=h/img_ratio;
    }else{             
        w=$(window).width()-2*margin;
        if( w < $(window).width() ) w=$(window).width()-2*margin;
        h=w * img_ratio;
    }
 
    $('#largeImg img').css({
        'position': 'absolute',
        'left': ($(window).width()-w)/2+'px',
        'top' : ($(window).height()-h)/2+'px',
        'width' :w+'px',
        'height':h+'px',
        'z-index':2
    });
     
}
(function(){
  var slideWidth1 = $('.slide1').outerWidth();  
  var slideNum1 = $('.slide1').length; 
  var slideSetWidth1 = slideWidth1 * slideNum1; 
  $('.slideSet1').css('width', slideSetWidth1);

  var slideCurrent1 = 0;

  var slideWidth2 = $('.slide2').outerWidth();
  var slideNum2 = $('.slide2').length;
  var slideSetWidth2 = slideWidth2 * slideNum2;
  $('.slideSet2').css('width', slideSetWidth2);

  var slideCurrent2 = 0;

  var sliding1 = function(){
    if( slideCurrent1 < 0 ){
      slideCurrent1 = slideNum1 - 1;

    }else if( slideCurrent1 > slideNum1 - 1 ){  
      slideCurrent1 = 0;

    }

    $('.slideSet1').stop().animate({
      left: slideCurrent1 * -slideWidth1
    });
  }

  $('.slider-prev1').click(function(){
    slideCurrent1--;
    sliding1();
  });

  $('.slider-next1').click(function(){
    slideCurrent1++;
    sliding1();
  });

  var sliding2 = function(){
    if( slideCurrent2 < 0 ){
      slideCurrent2 = slideNum2 - 1;
    }else if( slideCurrent2 > slideNum2 - 1 ){ 
      slideCurrent2 = 0;

    }

    $('.slideSet2').stop().animate({
      left: slideCurrent2 * -slideWidth2
    });
  }

  $('.slider-prev2').click(function(){
    slideCurrent2--;
    sliding2();
  });

  $('.slider-next2').click(function(){
    slideCurrent2++;
    sliding2();
  });
}());
</script>
@endsection