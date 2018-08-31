<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Cebu English Acandemy</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">

  @yield('css')

  <script type="text/javascript" src="{{asset('js/jquery-3.3.1.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery-migrate-1.4.1.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery-migrate-1.4.1.js')}}"></script>
</head>
<body class='bodybg'>
  @include('header')
  <div class="container">
      @yield('content')
  </div>
  @include('footer')
  
  @yield('js')
</body>
</html>