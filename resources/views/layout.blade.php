<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
  <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery-3.1.1.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery-migrate-1.4.1.js')}}"></script>
  @yield('css')
</head>
<body>
  @include('header')
  <div class="container" style="padding-top: 120px; ">
    <div class="row">
      @yield('content')
    </div>
  </div>
  @include('footer')
  <script type='text/javascript'>
  $(document).ready(function(){

  });
  </script>
  @yield('js')
</body>
</html>