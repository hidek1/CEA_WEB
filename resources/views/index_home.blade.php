@extends('layout')
@section('content')
{{--   <div class="col-md-8">
      <div class="alert dismiss alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
          @if(session("message"))
              {{session('message')}}
          @endif
      </div>
  </div> --}}
   <div class="slideshow-container">

      <div class="mySlides fade">
        <img src="images/mantoman.jpg" style="width:80%">
      </div>
      <div class="mySlides fade">
        <img src="images/mantoman2.jpg" style="width:80%">
      </div>
      <div class="mySlides fade">
        <img src="images/Juniorgroup5.jpeg" style="width:80%">
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
                <div class="desc">{{ __('messages.Price') }}</div>
                <a target="_blank" href="img_5terre.jpg">
                </a>
              </div>
              <div class="gallery">
                <div class="desc">{{ __('messages.Schedule') }}</div>
                  <a target="_blank" href="img_forest.jpg">                 
                  </a>
              </div>
            <div class="gallery">
              <div class="desc">{{ __('messages.Facility') }}</div>
              <a target="_blank" href="{{ asset('images/techers.jpg') }}">
                <img src="{{ asset('images/techers.jpg') }}" alt="teachers">
              </a>
            </div>
        </div>
      </div>
    </div>
      <div class="row ccc" >
        <div class="container">
          <div class="col-md-10 text-center gallery_controller">
              <div class="gallery">
                <div class="desc">{{ __('messages.Meal') }}</div>
                <a target="_blank" href="images/meal.jpg">
                  <img src="images/meal.jpg" alt="5Terre">
                </a>
              </div>
              <div class="gallery">
                <div class="desc">{{ __('messages.Picture') }}</div>
                  <a target="_blank" href="img_forest.jpg">
                  </a>
              </div>
            <div class="gallery">
              <div class="desc">{{ __('messages.experience') }}</div>
              <a target="_blank" href="img_lights.jpg">
              </a>
            </div>
        </div>
      </div>
    </div>
    <div class="clearfloat">&nbsp;</div>
    <div class="container">
      <div class="row">
      <div class="col-lg-9">
      <div class="col-lg-12">
      <span class="archive_head--top ">{{ __('messages.NewArticles') }}</span>
      </div>
      @foreach($blogs as $blog)
        <div class="row">
              <div class="col-lg-3">
                    <img src="{{asset('images/blog/'.$blog->blog_img)}}" width="110px" height="110px" style="object-fit: cover;">           
              </div>
              <div class="col-lg-9">
                    <a href="allblog/{{$blog->id}}" class="title_a" target="_blog"><span class="archive__title">{{ str_limit($blog->title,20)}}</span></a>
                    <p>
                      <h5 class="string_content">{{ str_limit($blog->content, 50, '...') }}</h5>
                      <span class="archive__date">{{ str_limit($blog->created_at, 10)}}</span>
                      <a href="allblog/{{$blog->id}}" target="_blog"><span class="archive__cat">View More?</span></a>
                    </p>
              </div>
          </div>
       @endforeach
     </div>
      
      <div class="col-lg-3">
      <span class="archive_head--top ">{{ __('messages.experience') }}</span>
    @foreach($experiences as $experience)
         <a href="experience/{{ $experience->id }}/show" style="color: black;">{{ $experience->name }}</a><br>
    @endforeach
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
  $('.alert').hide(5000);
</script>
@endsection