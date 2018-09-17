@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/slider.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('https://use.fontawesome.com/releases/v5.0.6/css/all.css')}}">
@endsection

@section('content')
<div class="container">
    <div class="row button_row">
        <div class="col-md-3">
            <button class="btn btn-warning  btn-block">Request Form</button>
        </div>
        <div class="col-md-3">
            <button class="btn btn-warning  btn-block">Absent Form</button>
        </div>
        <div class="col-md-3">
            <button class="btn btn-warning  btn-block">Travel Form</button>
        </div>
        <div class="col-md-3">
            <button class="btn btn-warning  btn-block">Academic Form</button>
        </div>
    </div>
    <div class="row button_row">
        @if ($entrance != null)
        <div class="col-md-3">
            <a href="{{ asset('/pdfs/'.$entrance->name) }}"><button class="btn btn-primary  btn-block">Entrance Test</button></a>
        </div>
        @endif
        @if ($chart != null)
        <div class="col-md-3">
            <a href="{{ asset('/pdfs/'.$chart->name) }}"><button class="btn btn-primary  btn-block">Progressive chart</button></a>
        </div>
        @endif
        @if ($result != null)
        <div class="col-md-3">
            <a href="{{ asset('/pdfs/'.$result->name) }}"><button class="btn btn-primary  btn-block">Result Examination</button></a>
        </div>
        @endif
        @if ($evaluation != null)
        <div class="col-md-3">
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
        <div class="col-md-6">
              <div class="slider">
                  <div class="slideSet1">
                      <div class="slide1 gal1">
                          <img src="{{ asset('/images/activity.jpg') }}" style="width:100%;">
                      </div>
                  </div>
                  <button class="slider-prev1"><i class="fas fa-angle-left"></i></button>
                  <button class="slider-next1"><i class="fas fa-angle-right"></i></button>
             </div>
        </div>
        <div class="col-md-6">
            <video src="{{ asset('/community_videos/') }}"   controls width="100%">
            </video>
            <video src="{{ asset('/community_videos/') }}"   controls width="100%">
            </video>
        </div>
    </div>
    <div class="row button_row">
        <div class="col-md-6">
            <button class="btn btn-success  btn-block">Submit student survey</button>
        </div>
        <div class="col-md-6">
            <button class="btn btn-success  btn-block">Submit Experience story</button>
        </div>
    </div>
</div>
@endsection