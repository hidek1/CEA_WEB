@extends('layout')

@section('content')
<div class="container">
  <div class="row pic_row">
    <div class="col-xs-4 col-md-4 col-lg-4">
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
    <div class="col-xs-4 col-md-4 col-lg-4">
      <h4 class="member_title">写真</h4>
         <div class="slideshow-container">

      <div class="mySlides2 fade">
        <img src="{{ asset('images/mantoman.jpg') }}" style="width:80%">
      </div>
      <div class="mySlides2 fade">
        <img src="{{ asset('images/mantoman2.jpg') }}" style="width:80%">
      </div>
      <div class="mySlides2 fade">
        <img src="{{ asset('images/Junior group5.jpeg') }}" style="width:80%">
      </div>
      <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
      </div>

    </div>
    </div>
    <div class="col-xs-4 col-md-4 col-lg-4">
      <h4 class="member_title">卒業スピーチ</h4>
      <video src="{{ asset('videos/CEA-student1.mp4') }}"   controls width="100%">
      </video>
    </div>
  </div>
</div>
<script type="text/javascript">
  var slideIndex = 0;
    showSlides1();
    showSlides2();
  function showSlides1() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";  
      }
    slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides1, 2000); // Change image every 2 seconds
  }
    var slideIndex = 0;
    showSlides();
  function showSlides2() {
    var i;
    var slides = document.getElementsByClassName("mySlides2");
    var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";  
      }
    slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides2, 2000); // Change image every 2 seconds
  }
</script>
@endsection