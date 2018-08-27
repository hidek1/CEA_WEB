@extends('layout')

@section('content')
<div class="container">
  <div class="row pic_row">
    <div class="col-xs-4 col-md-4 col-lg-4">
      <h4 class="member_title">デイリーエッセイ</h4>
        <div class="mySlider1">
          <div id="mySlider1-target" class="carousel slide" data-ride="carousel">
          <!-- ページャー部分 -->
            <ol class="carousel-indicators">
              <li data-target="#mySlider1-target" data-slide-to="0"></li>
              <li data-target="#mySlider1-target" data-slide-to="1" class="active"></li>
              <li data-target="#mySlider1-target" data-slide-to="2"></li>
            </ol>
          <!-- 画像部分 -->
            <div class="carousel-inner" role="listbox">
              <div class="item">
                <img src="images/Junior group4.jpg" title="Image01" alt="Image01" width="100%">
                  <div class="carousel-caption">
                    <h4>Image 01</h4>
                    <p>Example</p>
                  </div>
              </div>
              <div class="item active">
                <img src="images/Junior group4.jpg" title="Image02" alt="Image02" width="100%">
                  <div class="carousel-caption">
                    <h4>Image 01</h4>
                    <p>Example</p>
                  </div>
              </div>
              <div class="item">
                <img src="images/Junior group4.jpg" title="Image03" alt="Image03" width="100%">
                  <div class="carousel-caption">
                    <h4>Image 01</h4>
                    <p>Example</p>
                  </div>
              </div>
            </div>
          <!-- 左右移動コントローラー部分 -->
            <a class="left carousel-control" href="#mySlider1-target" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#mySlider1-target" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
      </div>
    </div>
    <div class="col-xs-4 col-md-4 col-lg-4">
      <h4 class="member_title">写真</h4>
      <div class="mySlider1">
          <div id="mySlider1-target" class="carousel slide" data-ride="carousel">
          <!-- ページャー部分 -->
            <ol class="carousel-indicators">
              <li data-target="#mySlider1-target" data-slide-to="0"></li>
              <li data-target="#mySlider1-target" data-slide-to="1" class="active"></li>
              <li data-target="#mySlider1-target" data-slide-to="2"></li>
            </ol>
          <!-- 画像部分 -->
            <div class="carousel-inner" role="listbox">
              <div class="item">
                <img src="images/Junior group4.jpg" title="Image01" alt="Image01"  width="100%">
                  <div class="carousel-caption">
                    <h4>Image 01</h4>
                    <p>Example</p>
                  </div>
              </div>
              <div class="item active">
                <img src="images/Junior group4.jpg" title="Image02" alt="Image02"  width="100%">
                  <div class="carousel-caption">
                    <h4>Image 01</h4>
                    <p>Example</p>
                  </div>
              </div>
              <div class="item">
                <img src="images/Junior group4.jpg" title="Image03" alt="Image03"  width="100%">
                  <div class="carousel-caption">
                    <h4>Image 01</h4>
                    <p>Example</p>
                  </div>
              </div>
            </div>
          <!-- 左右移動コントローラー部分 -->
            <a class="left carousel-control" href="#mySlider1-target" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#mySlider1-target" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
      </div>
    </div>
    <div class="col-xs-4 col-md-4 col-lg-4">
      <h4 class="member_title">卒業スピーチ</h4>
    </div>
  </div>
</div>
@endsection