@extends('frontend.layouts.layout_lomasvendido')
@section('title', 'HANA')
  
@section('content')


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
 <br>

 
<div id="content">
<!-- slider1 -->
  <div class="row">
    <div class="col">
       <div class="mySlides w3-animate-left">
          <img  src="frontend/images/lomasvendido/banner1.png" id="im">
            <div class="centrado">
              <p id="t1">Lo más </p>
              <p id="t2">VENDIDO</p>
              
            </div>
        </div>
        <div class="mySlides w3-animate-left">
           <img  src="frontend/images/lomasvendido/banner2.png" style="width:100%" id="im">
           <div class="centrado5" >
            <img src="frontend/images/lomasvendido/texto1.png"  width="100%">
            <img src="frontend/images/lomasvendido/texto2.png"  width="100%">
            </div>
        </div>
    </div>
  </div>
<!-- fin slider -->

<!-- texto lo mas vendido -->
  <div class="row">
      <div class="col" >
          <img src="frontend/images/lomasvendido/lomasvendido.png" alt="Lo más vendido"  style="width:100%; ">
      </div>   
  </div>

<!-- texto arreglos florales -->
  <div class="row">
      <div class="col" >
          <img src="frontend/images/lomasvendido/arreglosflorales.png" alt="Lo más vendido"  style="width:100%; padding-top: 5%;">
      </div>   
  </div>

<br>
   @php
      {{ $texto="active";}}
   @endphp
<!-- slider2 -->
   <div class="row">
            <div id="slider-2" class="carousel carousel-by-item slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    @foreach($productos as $pro)
                       @php
                         $producto_id=$pro->id;
                       @endphp
                     <div class="carousel-item {{$texto}}">
                        <div class="col-md-3 col-sm-4 col-6">
                            <a href="{{route('producto.show', $producto_id)}}">
                              <img class="d-block img-fluid" src="../{{ $pro->path}}" alt="First slide">
                            </a>
                           <div class="top-right">
                               @if ($validar==1)
                               <a href="{{route('catalogo.show', $pro->id)}}">
                                 @php
                                   {{ $icono="corazon3"; }}
                                 @endphp
                                 @foreach($deseable_buscar as $favoritos)
                                      @if($favoritos->product_id==$producto_id)

                                       @php
                                         {{ $icono="corazon4"; }}
                                       @endphp

                                      @else
                                      @endif 
                                    
                                 @endforeach
                                <img src="frontend/icons/{{$icono}}.png" id="corazon">
                                </a>
                                @else
                                @endif
                            </div>
            {!! Form::open(['route' => 'carrito.store', 'method' => 'post']) !!}
                              <div class="row">
                                   <div class="col-lg-8 col-md-8 col-sm-8 col-8" >
                                       <center> <p  id="precio" >{{ $pro->price}}</p></center>
                                   </div>
                                   <div class="col-lg-4 col-md-4 col-sm-4 col-4"  >
                                    <center>
                                     <button type="submit" style="background-color: transparent;border-color: transparent;">
                                        <img src="frontend/icons/compraaqui.png" id="compraaqui">
                                     </button>
                                   </div>
                               </div>

                               <div class="row">
                                   <div class="col-lg-7 col-md-7 col-sm-6 col-6" >
                                       <center> <p  id="texto_globos" >Envío incluido</p></center>
                                   </div>
                                   <div class="col-lg-5 col-md-5 col-sm-6  col-6"  >
                                       <center> <p  id="texto_globos" >Compra aquí</p></center>
                                   </div>
                               </div>
                    <input type="text" value="{{$producto_id}}" name="id_producto" id="input_transparent" disabled>

             {!! Form::close() !!}

                        </div>
                    </div>   

                   @php
                       {{ $texto=""; }}
                   @endphp 
                   @endforeach
    
                </div>
                <div id="flecha_izq">
                  <a class="carousel-control-prev" href="#slider-2" role="button" data-slide="prev">
                    <img src="frontend/icons/izq.png" id="flecha">
                  </a>
                </div>

                <div id="flecha_der">
                  <a class="carousel-control-next" href="#slider-2" role="button" data-slide="next">
                     <img src="frontend/icons/der.png" id="flecha">
                  </a>
                </div>
            </div>
        </div>
<!-- FIN SLIDER2 -->
<br>
<!--    TITULO GLOBOS   --> 
    <div class="row">
          <div class="col" >
               <img src="frontend/images/lomasvendido/globos.png" alt="Lo más vendido"  style="width:100%; ">
          </div>   
    </div>
<!--    FIN TITULO GLOBOS   --> 
<!--     GLOBOS   --> 

    <div class="row">

      @foreach ($productos_globos as $globo)
        @php
          {{$product=$globo->id;}}
        @endphp
        <div class="col-lg-3 col-md-3 col-sm-3 col-6" >
           <a href="{{route('producto.show', $product)}}">
             <img src="../{{ $globo->path}}" alt="Lo más vendido"  style="width:100%; padding-top: 5%;">
          </a>
             <div class="top-right">
                 @if ($validar==1)
                    <a href="{{route('catalogo.show', $globo->id)}}">
                        @php
                            {{ $icono="corazon3"; }}
                        @endphp
                        @foreach($deseable_buscar as $favoritos)
                              @if($favoritos->product_id==$product)
                                  @php
                                    {{ $icono="corazon4"; }}
                                  @endphp
                              @else
                              @endif 
                        @endforeach
                        <img src="frontend/icons/{{$icono}}.png" id="corazon">
                    </a>
                  @else
                  @endif
             </div>
           {!! Form::open(['route' => 'carrito.store', 'method' => 'post']) !!}
                              <div class="row">
                                   <div class="col-lg-8 col-md-8 col-sm-8 col-8" >
                                       <center> <p  id="precio" >{{ $globo->price}}</p></center>
                                   </div>
                                   <div class="col-lg-4 col-md-4 col-sm-4 col-4"  >
                                    <center>
                                     <button type="submit" style="background-color: transparent;border-color: transparent;">
                                        <img src="frontend/icons/compraaqui.png" id="compraaqui">
                                     </button>
                                   </div>
                               </div>

                               <div class="row">
                                   <div class="col-lg-7 col-md-7 col-sm-6 col-6" >
                                       <center> <p  id="texto_globos" >Envío incluido</p></center>
                                   </div>
                                   <div class="col-lg-5 col-md-5 col-sm-6  col-6"  >
                                       <center> <p  id="texto_globos" >Compra aquí</p></center>
                                   </div>
                               </div>
                    <input type="text" value="{{$product}}" name="id_producto" id="input_transparent" disabled>

             {!! Form::close() !!}

        </div>   
       @endforeach
   </div>

   <!--     fin globos   --> 
</div>

 <!--     TARJETA   --> 
    <div class="row">
          <div class="col" >
               <img src="frontend/images/lomasvendido/tarjeta.png" alt="tarjeta de regalo"  style="width:100%;">
          </div>   
    </div>
       <!--     fin tarjeta   --> 


<br>


@endsection