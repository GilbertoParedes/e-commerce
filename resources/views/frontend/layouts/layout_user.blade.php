<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
      Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cliente') }}</title>
  
  <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('frontend/css/menu.css') }}" rel='stylesheet' type='text/css' />  
    <link href="{{ asset('frontend/css/banner.css') }}" rel='stylesheet' type='text/css' />

  
</head>
<body>

    <div class="page-container">
        @guest
            @yield('contentido')
        @else
            <div class="left-content">
                <div class="inner-content">
                    @include('frontend.partials.siderbar')
                    @yield('content')
                </div>
            </div>
        @endguest
    </div>
      <script src="{{ asset('frontend/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/menu.js') }}" type="text/javascript"></script>
</body>
</html>
