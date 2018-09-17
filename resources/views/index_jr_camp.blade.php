@extends('layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-xs-4 col-md-4 col-lg-4">
        <img src="images/juniorgroup.jpg" class="img-responsive" width="100%">
    </div>
    <div class="col-xs-4 col-md-4 col-lg-4">
        <img src="images/Play Room (2).jpg" class="img-responsive" width="100%">
    </div>
    <div class="col-xs-4 col-md-4 col-lg-4">
        <img src="images/Junior group4.jpg" class="img-responsive" width="100%">
    </div>
  </div>
  <h1 class="sub_title2">{{ __('messages.Jr_mainTitle') }}</h1>
  <h3 class="sub_title3">1．{{ __('messages.Jr_content1') }}<br> {{ __('messages.Jr_content2') }}</h3>
  <h3 class="sub_title3">2．{{ __('messages.Jr_content3') }}<br> {{ __('messages.Jr_content4') }}</h3>
  <h3 class="sub_title3">3．{{ __('messages.Jr_content5') }}</h3>
</div>
@endsection