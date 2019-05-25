@extends('frontend.layouts.layout_paquetescompletos')
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
        <H1 id="txt_globo">PAQUETES COMPLETOS</H1>
        <hr>
      </div>   
  </div>
<br>

<!--     GLOBOS   --> 

<div class="margen">
    <div class="row" >
       @foreach($cat_prod as $cat)
           <div id="un_div" >  
              {{$categoria_producto_id=$cat->id}}
              {{$producto_id=$cat->producto_id}}
           </div> 

       @foreach($productos as $pro)
           <div id="un_div">  {{ $id_productos=$pro->id}}</div>
            @if ($producto_id == $id_productos)
        <div class="col-lg-12 col-md-12 col-sm-12 col-12" >
          <div id="bordes">
             <a href="letras_numeros">
               <img src="../{{ $pro->path}}" alt="Lo más vendido"  style="width:100%;">
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
                 <div class="col-12" >
                         <center> <p  id="texto_letras" >5 Letras y 2 números</p></center>
                 </div>
               </div>
                 <div class="row">
                   <div class="col-12" >
                         <center> <p  id="precio" >{{ $pro->price}}</p></center>
                     </div>
                     
                  </div>

                 <div class="row">
                     <div class="col-12" >
                         <center> <p  id="texto_globos" >Envío incluido</p></center>
                     </div>
                   
                 </div>
           </div>  
        </div>   
        @endif

             
           @endforeach
      @endforeach   
   </div>
</div>
   <!--     fin globos   --> 
</div>

@endsection



