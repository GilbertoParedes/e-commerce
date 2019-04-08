<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link href="{{ asset('frontend/css/menu2.css') }}" rel='stylesheet' type='text/css' />
    
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('frontend/css/menu.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('frontend/css/principal.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('frontend/css/3.0.0.boostrap.min.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('frontend/css/.css') }}" rel='stylesheet' type='text/css' />

  
  <link rel="stylesheet" type="text/css" href="css/menu.css">
  <link rel="stylesheet" type="text/css" href="css/principal.css">
  <link href="css/3.0.0.boostrap.min.css" rel="stylesheet">

  <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/boostrap.min.4.3.1.js"></script>
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/boostrap.min.3.0.0.js"></script>
 

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
    


</body>
</html>

