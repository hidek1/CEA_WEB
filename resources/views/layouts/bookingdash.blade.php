<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
   
    {{ Html::style('css/font-awesome.min.css') }}
   


    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('vendor/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
     <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datepicker.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datepicker.standalone.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datepicker3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datepicker3.standalone.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/media/layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/icons/style.css')}}">

    @yield('style')
    <title>@yield('title')</title>
</head>
<body>
@include('layouts.navbar')

<div class="container">
    @yield('content')
</div>





    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('vendor/metisMenu/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('vendor/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('data/morris-data.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('dist/js/sb-admin-2.js') }}"></script>
    <script src="{{ asset('js/daypilot/daypilot-all.min.js') }}"></script>
   
</body>
@yield('script')



</body>
</html>

