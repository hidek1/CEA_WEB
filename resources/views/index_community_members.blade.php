@extends('layout')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/slider.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('https://use.fontawesome.com/releases/v5.0.6/css/all.css')}}">
@endsection

@section('content')
<div id="back-curtain"></div>
<div class="largeImage"><img src="{{ asset('') }}"></div>
<div class="container">
  @if(Auth::check())
  <div class="row">
        <h3>Welcome, {{Auth::user()->name}}</h3>
    </div>
  @endif
  <div class="row pic_row">
    
    <div class="col-xs-12 col-md-12 col-lg-4">
      <h4 class="member_title">デイリーエッセイ</h4>
      <div class="slider">
      <div class="slideSet1">
        @if(Auth::check())
          @foreach($essaydailyphoto as $dailyphoto)
              @if($dailyphoto->user_id == auth::user()->id)
                  <div class="slide1 gal1">
                      <img src="{{ asset('/images/'.$dailyphoto->img_name) }}" style="width:100%;">
                  </div>
              @endif
          @endforeach
        @endif
      </div>
      <button class="slider-prev1"><i class="fas fa-angle-left"></i></button>
      <button class="slider-next1"><i class="fas fa-angle-right"></i></button>
      </div>
    </div>
    <div class="col-xs-12 col-md-12 col-lg-4">
      <h4 class="member_title">写真</h4>
      <div class="slider">
      <div class="slideSet2">

        @if(Auth::check())
          @foreach($photopictures as $picture)
              @if($picture->user_id == auth::user()->id)
              <div class="slide2 gal2">
                    <img src="{{ asset('/images/'.$picture->name) }}" style="width:100%;">
              </div>
             @endif
          @endforeach
        @endif

      </div>
      <button class="slider-prev2"><i class="fas fa-angle-left"></i></button>
      <button class="slider-next2"><i class="fas fa-angle-right"></i></button>
    </div>
    </div> 
    <div class="col-xs-12 col-md-12 col-lg-4">
      <h4 class="member_title">卒業スピーチ</h4>
      @if($speech != null)
        <video src="{{ asset('/community_videos/'.$speech->name) }}"   controls width="100%">
      </video>
      @endif
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-md-12 col-lg-4 text-center">
      <h4>※Download file</h4>
      <button type="button" class="btn btn-primary">Graduate certificate download</button>
      <button type="button" class="btn btn-primary btn_posi">Result sheets download</button>
    </div>
    <div class="col-xs-12 col-md-12 col-lg-4 text-center">
      <h4>※posting student survey</h4>
      <a href="{{asset('/index_survey')}}"><button type="button" class="btn btn-warning">Student survey</button></a>
    </div>
    <div class="col-xs-12 col-md-12 col-lg-4 text-center">
      <h4>※posting experience story</h4>
      <a href="{{asset('/index_experience')}}"><button type="button" class="btn btn-warning">Experience story</button></a>
    </div>
  </div>
  @if(Auth::check())
  <a href="{{asset('main/logout')}}"><p class="text-center" style="padding-top: 30px">ログアウト</p></a>

  @endif
</div>
<script>
var img_width;
var img_height;
var img_ratio;
 
jQuery.event.add(window, "load", function(){
    var el = $('.largeImage img');
        var img = new Image();
        img.src = el.attr('src');
        img_width = img.width; 
        img_height = img.height;
    img_ratio = img_height/img_width;  
    });
 
var small_pics1 = document.getElementsByClassName('gal1');
for(var i = 0; i < small_pics1.length; ++i){
  var pic = $(".largeImage img")  
  var pictures=new Array();
    @if(Auth::check())
      @foreach($essaydailyphoto as $dailyphoto)
          @if($dailyphoto->user_id == auth::user()->id)
              pictures.push("{{ asset('/images/'.$dailyphoto->img_name) }}" );
          @endif
      @endforeach
    @endif
  console.log(pictures[i]);
  (function(j){
    $(small_pics1[j]).click(function(e) {
        e.preventDefault();
        disp();
        console.log(pictures[j]);
        $(pic).attr('src', pictures[j]);
        $(pic).fadeIn();
    });
  })(i);
}

var small_pics2 = document.getElementsByClassName('gal2');
for(var i = 0; i < small_pics2.length; ++i){
  var pictures2=new Array();
    @if(Auth::check())
      @foreach($photopictures as $picture)
          @if($picture->user_id == auth::user()->id)
              pictures2.push("{{ asset('/images/'.$picture->name) }}" );
          @endif
      @endforeach
    @endif
  console.log(pictures2[i]);
  (function(j){
    $(small_pics2[j]).click(function(e) {
        e.preventDefault();
        disp();
        console.log(pictures2[j]);
        $(pic).attr('src', pictures2[j]);
        $(pic).fadeIn();
    });
  })(i);
}

jQuery.event.add(window, "resize", function(){disp();});
 
$('#back-curtain, .largeImage').click(function() {
    $('.largeImage img').fadeOut('slow', function() {$('#back-curtain').hide();});
});
 
function disp(){
    $('#back-curtain')
        .css({
            'width' : $(window).width(),  
            'height': $(window).height()*3 
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
 
    $('.largeImage img').css({
        'position': 'absolute',
        'left': ($(window).width()-w)/2+'px',
        'top' : ($(window).height()-h)/2+'px',
        'width' :w+'px',
        'height':h+'px',
        'z-index':2
    });
    $('.largeImage').css({
        'display':"block"
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