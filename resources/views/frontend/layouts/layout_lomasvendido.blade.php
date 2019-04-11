<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title','HANA') | Inicio</title>
    

    <script src="{{asset('frontend/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/slider.js')}}"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" id="bootstrap-css" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/lo_mas_vendido.css')}}">
    
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/menu.js')}}"></script>
    <script src="{{asset('frontend/js/carrousel.js')}}"></script>


</head>
<body>
<style type="text/css" id="slider-css">
.carousel-item > div {
    float: left;
}
.carousel-by-item [class*="cloneditem-"] {
    display: none;
}
.mySlides {display:none;}
.centrado{
  position:absolute;
  z-index: 1;
}
</style>
    @include('frontend.partials.nav')
    <section>
        @yield('content')
    </section>
</body>

<script src="{{asset('frontend/js/carrousel_lomasvendido.js')}}"></script>
</html>