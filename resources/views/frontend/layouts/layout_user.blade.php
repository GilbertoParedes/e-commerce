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

    <title>{{ config('app.name', 'Laravel') }}</title>
  
 	 <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />

    <link href="{{ asset('frontend/css/menu.css') }}" rel='stylesheet' type='text/css' />
    
  
    <link href="{{ asset('frontend/css/principal.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('frontend/css/3.0.0.boostrap.min.css') }}" rel='stylesheet' type='text/css' />
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js.js') }}"></script>
    <script src="{{ asset('frontend/js/boostrap.min.4.3.1.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/boostrap.min.3.0.0.js') }}"></script>

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
    
</body>
</html>