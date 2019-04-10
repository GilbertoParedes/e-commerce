<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
     <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.css') }}" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet"> 
    <!-- jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="{{ asset('admin/css/icon-font.min.css') }}" type='text/css' />
    <!-- //lined-icons -->
    <script src="{{ asset('admin/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('admin/js/amcharts.js') }}"></script>  
    <script src="{{ asset('admin/js/serial.js') }}"></script>    
    <script src="{{ asset('admin/js/light.js') }}"></script> 
    <script src="{{ asset('admin/js/radar.js') }}"></script> 
    <link href="{{ asset('admin/css/barChart.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('admin/css/fabochart.css') }}" rel='stylesheet' type='text/css' />
    <!--clock init-->
    <script src="{{ asset('admin/js/css3clock.js') }}"></script>
    <!--Easy Pie Chart-->
    <!--skycons-icons-->
    <script src="{{ asset('admin/js/skycons.js') }}"></script>

    <script src="{{ asset('admin/js/jquery.easydropdown.js') }}"></script>
    <script src="{{ asset('admin/js/dropzone.js') }}"></script>


    <!--//skycons-icons-->
   
</head>
<body>

    <div class="page-container">
        @guest
            @yield('content')
        @else
            <div class="left-content">
                <div class="inner-content">
                    @include('frontend.partials.siderbar')
                    @yield('content')
                </div>
            </div>
        @endguest
    </div>
    

    <!--js -->
<link rel="stylesheet" href="{{ asset('admin/css/vroom.css') }}">
<script type="text/javascript" src="{{ asset('admin/js/vroom.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/TweenLite.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/CSSPlugin.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('admin/js/scripts.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
</body>
</html>

