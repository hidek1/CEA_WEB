@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/slider.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('https://use.fontawesome.com/releases/v5.0.6/css/all.css')}}">
@endsection

@section('content')
<div id="back-curtain"></div>
<div class="largeImage"><img src="{{ asset('') }}"></div>
<div class="container">
     @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    <strong>{{$message}}</strong>
                </div>
                
            @endif
    <div class="row button_row">
        <div class="col-md-3">
            <a href="/contactmail" target="_requestform"><button class="btn btn-warning  btn-block">Request Form</button></a>
        </div>
        <div class="col-md-3">
            <a href="/absentform" target="_blank"><button class="btn btn-warning  btn-block">Absent Form</button></a>
        </div>
        <div class="col-md-3">
            <a href="/travelform" target="_travelform"><button class="btn btn-warning  btn-block">Travel Form</button></a>
        </div>
        <div class="col-md-3 button-posi">
            <button class="btn btn-warning  btn-block">Academic Form</button>
        </div>
    </div>
    <div class="row button_row">
        @if ($entrance != null)
        <div class="col-md-3 button-posi">
            <a href="{{ asset('/pdfs/'.$entrance->name) }}"><button class="btn btn-primary  btn-block">Entrance Test</button></a>
        </div>
        @endif
        @if ($chart != null)
        <div class="col-md-3 button-posi">
            <a href="{{ asset('/pdfs/'.$chart->name) }}"><button class="btn btn-primary  btn-block">Progressive chart</button></a>
        </div>
        @endif
        @if ($result != null)
        <div class="col-md-3 button-posi">
            <a href="{{ asset('/pdfs/'.$result->name) }}"><button class="btn btn-primary  btn-block">Result Examination</button></a>
        </div>
        @endif
        @if ($evaluation != null)
        <div class="col-md-3 button-posi">
            <a href="{{ asset('/pdfs/'.$evaluation->name) }}"><button class="btn btn-primary  btn-block">Evaluation</button></a>
        </div>
        @endif
    </div>
    <div class="row button_row">
        <div class="col-md-6">
            @if ($graduation != null)
            <a href="{{ asset('/pdfs/'.$graduation->name) }}"><button class="btn btn-info  btn-block">Graduation Certification</button></a>
            @endif
        </div>
        <div class="col-md-6">
            @if ($class != null)
            <a href="{{ asset('/pdfs/'.$class->name) }}"><button class="btn btn-info  btn-block">Class schedule</button></a>
            @endif
        </div>
    </div>
    <div class="row button_row">
        <div class="col-md-6" style="padding-bottom: 30px;">
              <div class="slider">
                  <div class="slideSet1">
                    @if(Auth::check())
                      @foreach($photopictures as $picture)
                          @if($picture->user_id == auth::user()->id)
                          <div class="slide1 gal1">
                              <img src="{{ asset('/images/'.$picture->name) }}" style="width:100%;" class="aligncenter size-full wp-image-425" data-toggle="modal" data-target="#image-modal">
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
                  <button class="slider-prev1"><i class="fas fa-angle-left"></i></button>
                  <button class="slider-next1"><i class="fas fa-angle-right"></i></button>
             </div>
        </div>
        <div class="col-md-6">
            <video src="{{ asset('/community_videos/'.$latest_speech->name) }}"   controls width="100%">
            </video>
            <a href="{{ asset('/official-speech') }}"><button class="btn btn-info  btn-block">More videos</button></a>
        </div>
    </div>
    <div class="row button_row">
        <div class="col-md-6 button-posi">
            <a href=""><button class="btn btn-success  btn-block">Submit student survey</button></a>
        </div>
        <div class="col-md-6">
            <a href="{{ route('experience', "official") }}"><button class="btn btn-success  btn-block">Submit Experience story</button></a>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
$(function(){
  $(document).on('click', '.slide1', function(){
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

}());
</script>
@endsection