@extends('layout')

@section('content')
   <div class="slideshow-container">

      <div class="mySlides fade">
        <img src="images/mantoman.jpg" style="width:80%">
      </div>
      <div class="mySlides fade">
        <img src="images/mantoman2.jpg" style="width:80%">
      </div>
      <div class="mySlides fade">
        <img src="images/mantoman3.jpg" style="width:80%">
      </div>

    </div>
          <br>

      <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
      </div>
  <div class="clearfloat">&nbsp;</div>
    <div class="row ccc" >
        <div class="container">
          <div class="col-md-10 text-center gallery_controller">
              <div class="gallery">
                <div class="desc">Price</div>
                <a target="_blank" href="img_5terre.jpg">
                </a>
              </div>
              <div class="gallery">
                <div class="desc">Program Schedule</div>
                  <a target="_blank" href="img_forest.jpg">                 
                  </a>
              </div>
            <div class="gallery">
              <div class="desc">Facility</div>
              <a target="_blank" href="img_lights.jpg">
                <img src="images/techers.jpg" alt="teachers">
              </a>
            </div>
        </div>
      </div>
    </div>
      <div class="row ccc" >
        <div class="container">
          <div class="col-md-10 text-center gallery_controller">
              <div class="gallery">
                <div class="desc">Meals</div>
                <a target="_blank" href="images/meal.jpg">
                  <img src="images/meal.jpg" alt="5Terre">
                </a>
              </div>
              <div class="gallery">
                <div class="desc">Picture</div>
                  <a target="_blank" href="img_forest.jpg">
                  </a>
              </div>
            <div class="gallery">
              <div class="desc">Story of Experience</div>
              <a target="_blank" href="img_lights.jpg">
              </a>
            </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
  var slideIndex = 0;
    showSlides();

  function showSlides() {
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
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }
</script>
@endsection