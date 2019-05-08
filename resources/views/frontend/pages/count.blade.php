@extends('frontend.layouts.layout_count')
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
</style>
 <br>

 
<div id="content">
<!-- banner -->
   <div class="row" >
    <div class="col">
      <img  src="frontend/images/micuenta/reemplazar.png" id="im">
    </div>
   </div>
   @foreach ($usuarios as $item) 
        @php
        {{$user_id=$item->id;}}
        {{$name=$item->name;}}
        {{$apellido_p=$item->apellido_p;}}
        {{$apellido_m=$item->apellido_m;}}
        {{$email=$item->email;}} 
        @endphp      
   @endforeach
                 
<!-- BIENVENIDO USUARIO -->
   <div class="row">
    <div class="col-3" id="bienvenido">
     <center><p id="txt_bienvenido">BIENVENIDO(A):</p></center>
    </div>
    <div class="col-8" id="nombre_usu">
     <p id="txt_nombre">{{$name}} {{$apellido_p}} {{$apellido_m}}</p>
    </div>
    <div class="col-12">
      <img src="frontend/images/micuenta/linea.png" width="100%;">
    </div>
   </div>

<!-- HOLA USUARIO -->
   <div class="row" >
    <div class="col-12">
      <p id="txt_hola">¡HOLA, {{$name}} {{$apellido_p}} {{$apellido_m}}</p>
    </div>
    <div class="col-12">
      <p id="txt_historial">HISTORIAL DE PEDIDOS ({{$cantidad_finalizado}})</p>
    </div>
   </div>

@if ($cantidad_finalizado>0)
   @php
      {{ $texto="active";}}
   @endphp

  <div class="row" id="margen_carousel">
      <!-- slider -->
      <div class="col-lg-7 col-md-12 col-sm-12 col-12" >
         <div id="slider-2" class="carousel carousel-by-item slide" data-ride="carousel">
                      <div class="carousel-inner" role="listbox">
                       @foreach($carrito_producto as $carr)
                         @php
                           {{$producto_id=$carr->producto_id;}}
                         @endphp
                          @foreach($productos as $products)
                            @php
                              {{$pk_producto=$products->id;}}
                            @endphp
                            @if ($producto_id==$pk_producto)

                              <div class="carousel-item {{$texto}}">
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div id="bordes">
                                     <a href="{{route('producto.show', $producto_id)}}">
                                       <img class="d-block img-fluid" src="../{{ $products->path}}" alt="First slide" width="100%"> 
                                     </a>
                                       <div class="top-right">
                                         <a href="{{route('catalogo.show', $producto_id)}}">
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
                                         
                                      </div>          
                                        <div class="row">
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-8" >
                                                 <center> <p  id="precio" >{{$products->price}}</p></center>
                                             </div>
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-4"  >
                                              
                                              <a href=""><center><img src="frontend/icons/compraaqui.png" id="compraaqui"></center></a>
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
                                         </div>                                 
                                  </div>
                              </div>
                            @endif
                          @endforeach
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

      <!-- parte2 -->
      <div class="col-lg-1 col-md-12 col-sm-12 col-12" >
       <div class="vl"></div>

      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 col-12" >
            <div class="row">
                <div class="col-12">
                    <a href="favoritos"><button id="btn_ver_mis_favoritos">VER MIS FAVORITOS</button></a>
                </div>
                 <div class="col-6">
                     <a href="#editarCuenta" data-toggle="modal"> 
                 <button id="btn_editar">EDITAR</button>  </a>            
                 </div>
                  <div class="col-6">
                      <form action="{{ route('logout') }}" method="POST" >
                            @csrf
                             <button id="btn_editar" type="submit">CERRAR SESIÓN</button>  
                      </form>
                 </div>

                 <div class="col-12">
                   <br>
                     <p id="txt_nombres">{{$name}} {{$apellido_p}} {{$apellido_m}} </p>         
                 </div>
                 <div class="col-12">
                     <p id="txt_correo">{{$email}}</p>         
                 </div>
                 <div class="col-12">
                     <a href="#exampleModal" data-toggle="modal"><p id="txt_ver_direcciones">Ver mis direcciones({{$cantidad_direcciones}})</p>  </a>       
                 </div>
                  <div class="col-12">
                     <a href="#addDireccion" data-toggle="modal"><p id="txt_correo">Agregar dirección</p> </a> 
                 </div>
             </div>
   </div>
  </div>
@else
            <div class="row" id="margen_informacion">
                <div class="col-12">
                    <a href="favoritos"><button id="btn_ver_mis_favoritos">VER MIS FAVORITOS</button></a>
                </div>
                 <div class="col-6">
                     <a href="#editarCuenta" data-toggle="modal"> 
                 <button id="btn_editar">EDITAR</button>  </a>            
                 </div>
                  <div class="col-6">
                      <form action="{{ route('logout') }}" method="POST" >
                            @csrf
                             <button id="btn_editar" type="submit">CERRAR SESIÓN</button>  
                      </form>
                 </div>

                 <div class="col-12">
                   <br>
                     <p id="txt_nombres">{{$name}} {{$apellido_p}} {{$apellido_m}} </p>         
                 </div>
                 <div class="col-12">
                     <p id="txt_correo">{{$email}}</p>         
                 </div>
                 <div class="col-12">
                     <a href="#exampleModal" data-toggle="modal"><p id="txt_ver_direcciones">Ver mis direcciones({{$cantidad_direcciones}})</p>  </a>       
                 </div>
                  <div class="col-12">
                     <a href="#addDireccion" data-toggle="modal"><p id="txt_correo">Agregar dirección</p> </a> 
                 </div>
             </div>
@endif

<!-- FIN SLIDER2 -->
<br>


</div>
<div class="row">
  <div class="col-12">
    <img src="frontend/images/micuenta/tarjeta.png" width="100%;">
  </div>
</div>
  
<br>
@endsection