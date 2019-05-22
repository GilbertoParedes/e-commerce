@extends('frontend.layouts.layout_favoritos')
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
<!-- banner -->
   <div class="row">
    <div class="col">
      <img  src="frontend/images/misfavoritos/MIS FAVORITOS.png" id="im">

    </div>
  </div>
   @php
      {{ $active=0;}}
   @endphp
   <!-- Si la cantidad de elementos es mayor a: -->

   @if($cantidad_favoritos>3)
            <div class="row">
            <div id="slider-2" class="carousel carousel-by-item slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                 
                  @foreach($favoritos as $item)
                                 @php
                                    {{$id_product=$item->product_id;$id_favorito=$item->id; $id_product=$item->product_id; $active=$active+1;}}
                                 @endphp

                                 @if($active==1)
                                   @php
                                      {{ $texto="active"; }}
                                   @endphp
                                 @else
                                   @php
                                      {{ $texto="no activo"; }}
                                   @endphp
                                 @endif
                                 

                                  @foreach($productos as $pro)
                                      @php
                                          {{ $producto_pk=$pro->id;}}                              
                                      @endphp 
                                      @if ($producto_pk==$id_product)
                                      
                                      <div class="carousel-item {{$texto}}">    
                                          <div class="col-md-4 col-sm-4 col-6">
                                            <div id="bordes">
                                               <a href="{{route('producto.show', $producto_pk)}}">
                                                 <img class="d-block img-fluid" src="../{{ $pro->path}}" alt="First slide" width="100%;">
                                               </a>
                                                 
                                                         <div class="top-right">
                                                             @if ($validar==1)
                                                             <a href="{{route('catalogo.show', $pro->id)}}">
                                                               @php
                                                                 {{ $icono="corazon3"; }}
                                                               @endphp
                                                               @foreach($favoritos as $fav)
                                                                    @if($fav->product_id==$producto_pk)

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
                                                <input type="text" value="{{$pro->id}}" name="id_producto" id="input_transparent" style="background-color: transparent;border-color: transparent; height: 1px;color:transparent;" >

                                        {!! Form::close() !!}
                                                 </div>
                                                 <div class="row">
                                                     <div class="col">
                                                        <a href="">
                                                            <center><img src="frontend/images/misfavoritos/clic.png" id="clic"></center>
                                                        </a>
                                                     </div>
                                                 </div>
                                          </div>
                                      </div>

                                      @endif  

                                  @endforeach

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
   @elseif($cantidad_favoritos>0)
      <div class="row">
         @foreach($favoritos as $item)
                                 @php
                                    {{$id_product=$item->product_id;$id_favorito=$item->id; $id_product=$item->product_id; $active=$active+1;}}
                                 @endphp

                                  @foreach($productos as $pro)
                                      @php
                                          {{ $producto_pk=$pro->id;}}                              
                                      @endphp 
                                      @if ($producto_pk==$id_product)
                                      
                                          <div class="col-md-4 col-sm-4 col-6">
                                            <div id="bordes">
                                              <a href="{{route('producto.show', $producto_pk)}}">
                                               <img class="d-block img-fluid" src="../{{ $pro->path}}" alt="First slide" width="100%;">
                                              </a>
                                              <div class="top-right">
                                                <a href="{{route('favoritos.show', $id_favorito)}}">
                                                  <img src="frontend/icons/corazon4.png" id="corazon">
                                                 </a> 
                                              </div>
                                          
                                           {!! Form::open(['route' => 'carrito.store', 'method' => 'post']) !!}   
                                                <div class="row">
                                                     <div class="col-lg-8 col-md-8 col-sm-8 col-8" >
                                                         <center> <p  id="precio" >{{ $pro->quantity}}</p></center>
                                                     </div>
                                                     <div class="col-lg-4 col-md-4 col-sm-4 col-4"  >
                                                      <center>
                                                      <button type="submit" style="background-color: transparent;border-color: transparent;">
                                                        <img src="frontend/icons/compraaqui.png" id="compraaqui">
                                                      </button></center>
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
                                                 <input type="text" value="{{$pro->id}}" name="id_producto" id="input_transparent" style="background-color: transparent;border-color: transparent; height: 1px;color:transparent;" >
                                              {!! Form::close() !!}
                                                 </div>
                                                 <div class="row">
                                                     <div class="col">
                                                        <a href="">
                                                          <center>
                                                            <img src="frontend/images/misfavoritos/clic.png" id="clic"></center>
                                                        </a>
                                                     </div>
                                                 </div>
                                          </div>
                                     

                                      @endif  

                                  @endforeach

                  @endforeach

      </div>
   @else
     <div class="row">
          <div class="col" >
               <p id="texto">AÚN NO TIENES PRODUCTOS AÑADIDOS A FAVORITOS...</p>         
          </div>   
    </div>
   @endif


  <!-- slider2 -->
   
<!-- FIN SLIDER2 -->
<br>
<!--    TITULO GLOBOS   --> 
    <div class="row">
          <div class="col" >
              <img src="frontend/images/misfavoritos/PENSADOS.png" alt="Lo más vendido"  style="width:100%; ">
          </div>   
    </div>
    <br>
<!--    FIN TITULO GLOBOS   --> 
<!--     GLOBOS   --> 

    <div class="row">
      @foreach ($prod_cat as $element)
          @php
            {{$fk_producto=$element->producto_id;}}
          @endphp
           @foreach ($productos as $prod)
                @php
                  {{$pk_producto=$prod->id;}}
                @endphp
              @if ($fk_producto==$pk_producto)

             
                   
                    <div class="col-md-3 col-sm-3 col-6" >
                        <a href="{{route('producto.show', $pk_producto)}}">
                         <img src="../{{$prod->path}}" alt="Lo más vendido"  style="width:100%; padding-top: 5%;">
                        </a>
                 
                      <div class="top-right">
                         @if ($validar==1)
                         <a href="{{route('catalogo.show', $fk_producto)}}">
                           @php
                             {{ $icono="corazon3"; }}
                           @endphp
                           @foreach($favoritos as $favorit)
                                @if($favorit->product_id==$pk_producto)

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
                                 <center> <p  id="precio" >{{$prod->price}}</p></center>
                             </div>
                             <div class="col-lg-4 col-md-4 col-sm-4 col-4"  >
                              <center>
                                <button type="submit" style="background-color: transparent;border-color: transparent;">
                                    <img src="frontend/icons/compraaqui.png" id="compraaqui">
                                </button>
                              </center>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-lg-7 col-md-7 col-sm-6 col-6" >
                                 <center> <p  id="texto_globos" >Envío incluido</p></center>
                             </div>
                             <div class="col-lg-5 col-md-5 col-sm-6 col-6"  >
                                 <center> <p  id="texto_globos" >Compra aquí</p></center>
                             </div>
                         </div>  
               <input type="text" value="{{$pk_producto}}" name="id_producto" id="transparente" >
            {!! Form::close() !!}
                    </div> 
              
              
              @else
              @endif 
           @endforeach 
        @endforeach  

   </div>

   <!--     fin globos   --> 
</div>
 <!--     TARJETA   --> 
  
       <!--     fin tarjeta   --> 
<br> 

@endsection