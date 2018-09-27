<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Cebu English Academy</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
  <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery-3.3.1.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery-migrate-1.4.1.js')}}"></script>
  @yield('css')
</head>
<body class='bodybg'>
  <div id="header">
    <div class="col-lg-12 text-center">
      <img src="{{ asset('images/cea_logo.png') }}" class="cea_img">
    </div>
  </div>
  <div class="container">
      @yield('content')
  </div>
  <footer class="page-footer font-small indigo">
  <!-- Copyright -->
    <div class="footer-copyright text-center py-3">&copy; <?php echo date('Y');?> Copyright:
      <a href="#"> Cebu English Academy</a>
    </div>
  <!-- Copyright -->

  </footer>

  @yield('js')

</body>
</html>