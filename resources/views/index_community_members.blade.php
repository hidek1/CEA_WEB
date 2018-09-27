@extends('layout')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/slider.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('https://use.fontawesome.com/releases/v5.0.6/css/all.css')}}">
@endsection

@section('content')
<div class="container">
  @if(Auth::check())
  <div class="row">
        <h3>Welcome, {{Auth::user()->name}}</h3>
    </div>
  @endif
  <div class="row pic_row">
    <div class="col-xs-12 col-md-12 col-lg-6">
      <h4 class="member_title">{{ __('messages.Co_content1') }}</h4>
      <div class="slider">
        <div class="slideSet1">
          @if(Auth::check())
            @foreach($essaydailyphoto as $dailyphoto)
                @if($dailyphoto->user_id == auth::user()->id)
                    <div class="slide1 gal1">
                        <img src="{{ asset('/images/'.$dailyphoto->img_name) }}" style="width:100%" class="aligncenter size-full wp-image-425" data-toggle="modal" data-target="#image-modal">
                    </div>
                    <div class="modal fade" id="image-modal">
                      <div class="modal-dialog">
                          <div class="modal-body">
                          <img src="{{ asset('/images/'.$dailyphoto->img_name) }}" alt="baby-1151351_1920" width="100%" class="aligncenter size-full wp-image-425" />
                          </div>
                      </div>
                   </div>
                @endif
            @endforeach
          @endif
        </div>
        <button class="slider-prev1"><i class="fas fa-angle-left"></i></button>
        <button class="slider-next1"><i class="fas fa-angle-right"></i></button>
      </div>
    </div>
    <div class="col-xs-12 col-md-12 col-lg-6">
      <h4 class="member_title">{{ __('messages.Co_content2') }}</h4>

        <div class="slider">
          <div class="slideSet2">
          @if(Auth::check())
            @foreach($photopictures as $picture)
                @if($picture->user_id == auth::user()->id)
                <div class="slide2 gal2">
                    <img src="{{ asset('/images/'.$picture->name) }}" style="width:100%" class="aligncenter size-full wp-image-425" data-toggle="modal" data-target="#image-modal">
                </div>
                <div class="modal fade" id="image-modal">
                  <div class="modal-dialog">
                      <div class="modal-body">
                      <img src="{{ asset('/images/'.$picture->name) }}" alt="baby-1151351_1920" width="100%" class="aligncenter size-full wp-image-425" />
                      </div>
                  </div>
               </div>
               @endif
            @endforeach
          @endif

        </div>
        <button class="slider-prev2"><i class="fas fa-angle-left"></i></button>
        <button class="slider-next2"><i class="fas fa-angle-right"></i></button>
      </div>
    </div>
  </div>
  <div class="row pic_row">
    <div class="col-xs-12 col-md-12 col-lg-6">
      <h4 class="member_title">{{ __('messages.Co_content3') }}</h4>
      @if($first_speech != null)
        <video src="{{ asset('/community_videos/'.$first_speech->name) }}"   controls width="100%">
      </video>
      @endif
    </div>
    <div class="col-xs-12 col-md-12 col-lg-6">
      <h4 class="member_title">{{ __('messages.Co_content4') }}</h4>
      @if($graduation_speech != null)
        <video src="{{ asset('/community_videos/'.$graduation_speech->name) }}"   controls width="100%">
      </video>
      @endif
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-md-12 col-lg-4 text-center">
      <h4>※Download file</h4>
      @if($graduation_pdf != null)
      <a href="{{ asset('/pdfs/'.$graduation_pdf->name) }}"><button type="button" class="btn btn-primary">Graduate certificate download</button></a>
      @endif
      @if($result_pdf != null)
      <a href="{{ asset('/pdfs/'.$result_pdf->name) }}"><button type="button" class="btn btn-primary btn_posi">Result sheets download</button></a>
      @endif
    </div>
    <div class="col-xs-12 col-md-12 col-lg-4 text-center">
      <h4>※posting student survey</h4>
      <a href="{{asset('/index_survey')}}"><button type="button" class="btn btn-warning">Student survey</button></a>
    </div>
    <div class="col-xs-12 col-md-12 col-lg-4 text-center">
      <h4>※posting experience story</h4>
      <a href="{{ route('experience', "camp") }}"><button type="button" class="btn btn-warning">Experience story</button></a>
    </div>
  </div>
  @if(Auth::check())
  <a href="{{asset('main/logout')}}"><p class="text-center" style="padding-top: 30px">{{ __('messages.Co_logout') }}</p></a>

  @endif
</div>
<script>
$(function(){
  $(document).on('click', '.slide1', function(){
    var pic = $(".modal-body img")
    // console.log($(this).find('img').attr('src'));
    $(pic).attr('src', $(this).find('img').attr('src'));
  });
  $(document).on('click', '.slide2', function(){
    var pic = $(".modal-body img")
    // console.log($(this).find('img').attr('src'));
    $(pic).attr('src', $(this).find('img').attr('src'));
  });
});
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