@extends('frontend.layouts.layout_catalogo')
@section('title', 'HANA')
  
@section('content')
<style type="text/css">
    #un_div { display : none; }
</style>

<div id="content">
<!-- slider1 -->
  <div class="row">
    <div class="col"> 
      <img src="../{{ $categorias->path }}"  alt="Photo of perfil" id="im">
    </div>
  </div>
<!-- fin slider -->

  <br>
<!-- texto arreglos florales -->
  <div class="row">
      <div class="col-12" >
        <H1 id="txt_globo">ARREGLOS FLORALES </H1>
        <hr>
      </div>   
  </div>
  <br>
  
<div class="row">
  @foreach($cat_prod as $cat)
       <div id="un_div" >  
           {{$categoria_producto_id=$cat->id}}
           {{$producto_id=$cat->producto_id}}
       </div> 
            
       @foreach($productos as $pro)
           <div id="un_div"> 
              {{ $id_productos=$pro->id}}
           </div>

           @if ($producto_id == $id_productos)

            <div class="col-lg-3 col-md-4 col-sm-6 col-6" >

                 <!-- mostrar imagen y en rutar a ver detalles del producto -->
                  <a href="{{route('producto.show', $pro->id)}}">
                    <img src="../{{ $pro->path}}" alt="imagen"  style="width:100%; padding-top: 5%;">
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
                         <center> <p  id="precio" >{{ $pro->quantity}}</p></center>
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
             <input type="text" value="{{$producto_id}}" name="id_producto" id="input_transparent" >

   {!! Form::close() !!}
            </div> 

       @endif

       @endforeach

  @endforeach   
</div>


   <!--     fin globos   --> 
</div>


@endsection