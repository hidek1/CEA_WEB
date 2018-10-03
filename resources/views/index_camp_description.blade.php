@extends('layout')

@section('content')
  <div class="container">
    <h1 class="main_title">{{ __('messages.D_mainTitle') }}</h1>
    <h2 class="sub_title">１）{{ __('messages.D_subTitle1') }}</h2>
    <h4>{{ __('messages.D_content1') }}<br><br>
    {{ __('messages.D_content2') }}<br>{{ __('messages.D_content3') }}
    </h4>
    <div class="row"  style="padding-top: 30px;">
      <div class="col-xs-6 col-md-6 col-lg-6">
        <table  class="table">
        <tr class="color_cell">
          <th>CEFR Level</th>
          <th>Hours of study needed to reach the level ( from ZERO)</th>
        </tr>
        <tr>
          <td class="color_cell">Elementary (A1)</td>
          <th></th>
        </tr>
        <tr>
          <td class="color_cell">Pre-intermediate (A2)</td>
          <th class="center_cell">180-200</th>
        </tr>
        <tr>
          <td class="color_cell">Intermediate (B1)</td>
          <th class="center_cell">350-400</th>
        </tr>
        <tr>
          <td class="color_cell">Upper-intermediate (B2)</td>
          <th class="center_cell">500-600</th>
        </tr>
        <tr>
          <td class="color_cell">Advanced (C1)</td>
          <th class="center_cell">700-800</th>
        </tr>
        <tr>
          <td class="color_cell">Proficiency (C2)</td>
          <th class="center_cell">1000-1200</th>
        </tr>
        </table>
      </div>
      <div class="col-xs-6 col-md-6 col-lg-6">
        <img src="{{asset('images/Junior man to man.jpg') }}" class="ceabldg_img zoomable" style="margin-top: 20px">
      </div>
    </div>
    <h4 style="padding-top: 30px;">{{ __('messages.D_content4') }}</h4>
    <h2 class="sub_title" style="padding-top: 50px">２）{{ __('messages.D_subTitle2') }}</h2>
    <h4 style="padding-bottom: 5px"><b>{{ __('messages.D_content5') }}</b></h4>
    <h4 class="lists">□{{ __('messages.D_content6') }}</h4>
    <h4 class="lists">□{{ __('messages.D_content7') }}</h4>
    <h4 class="lists">□{{ __('messages.D_content8') }}</h4>
    <h4 class="lists">□{{ __('messages.D_content9') }}</h4>
    <div class="row pic_row">
      <div class="col-xs-8 col-md-8 col-lg-8">
        <img src="{{asset('images/image1.jpeg') }}" class="img-responsive zoomable" width="100%">
        <h6 class="describe_pic">{{ __('messages.D_pic1') }}</h6>
      </div>
      <div class="col-xs-4 col-md-4 col-lg-4">
        <img src="{{asset('images/image2.jpeg') }}" class="img-responsive zoomable" width="100%">
        <h6 class="describe_pic">{{ __('messages.D_pic2') }}</h6>
      </div>
    </div>
    <h4>{{ __('messages.D_content10') }}<br>
      {{ __('messages.D_content11') }}<br>
    {{ __('messages.D_content12') }}<br>{{ __('messages.D_content13') }}</h4>
    <h2 class="sub_title" style="padding-top: 50px">３）{{ __('messages.D_subTitle3') }}</h2>
    <h3 style="padding-top:5px ;">{{ __('messages.D_content14') }}</h3>
    <h3 class="num_title">1．{{ __('messages.D_content15') }}</h3>
    <h4>{{ __('messages.D_content16') }}<br>{{ __('messages.D_content17') }}</h4>
    <h3 class="num_title">2．{{ __('messages.D_content18') }}</h3>
    <h4>{{ __('messages.D_content19') }}<br>{{ __('messages.D_content20') }}</h4>
    <h3 class="num_title">3．{{ __('messages.D_content21') }}</h3>
    <h4>{{ __('messages.D_content22') }}</h4>
    <img src="{{asset('images/Junior group2.jpg') }}" class="img-responsive img_b  center-block zoomable" width="50%">
  </div>
@endsection