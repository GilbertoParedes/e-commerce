@extends('frontend.layouts.layout_arreglos_menores')
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
       <img  src="frontend/images/lomasvendido/banner1.png" id="im">
            <div class="centrado">
              <p id="t1">Arreglos</p>
              <p id="t2">-$450.00</p> 
            </div>
    </div>
  </div>
<!-- fin slider -->

<!-- texto lo mas vendido -->
  <div class="row">
        <div class="col-6" >
          <center><p id="txt_comprar">COMPRAR EN HANA</p></center>
        </div>  
        <div class="col-6">
          <p id="txt_facil">ES MUY FACIL</p>
        </div> 
        <div class="col-12">
          <img src="frontend/images/carritocompras/linea.png" id="linea">
        </div>
    </div>


<!--     arreglos menores a 450   --> 

    <div class="row">

      @foreach ($productos as $arreglos)
        @php
          {{$product=$arreglos->id;}}
        @endphp
        @if ($arreglos->price<=450)
         
        <div class="col-lg-3 col-md-3 col-sm-3 col-6" >
           <a href="{{route('producto.show', $product)}}">
             <img src="../{{ $arreglos->path}}" alt="Lo más vendido"  style="width:100%; padding-top: 5%;">
          </a>
             <div class="top-right">
                 @if ($validar==1)
                    <a href="{{route('catalogo.show', $arreglos->id)}}">
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
                                       <center> <p  id="precio" >{{ $arreglos->price}}</p></center>
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
                    <input type="text" value="{{$product}}" name="id_producto" id="input_transparent" >

             {!! Form::close() !!}

        </div>  
         {{-- expr --}}
        @endif 
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