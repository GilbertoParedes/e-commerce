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
         
             <img src="../{{ $pro->path}}" alt="Lo más vendido"  style="width:100%; padding-top: 5%;">
              <div class="top-right"><img src="frontend/icons/corazon3.png" id="corazon"></div>

             <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-8 col-8" >
                     <center> <p  id="precio" >{{ $pro->quantity}}</p></center>
                 </div>
                 <div class="col-lg-4 col-md-4 col-sm-4 col-4"  >
                  <center>
                  <a href=""><img src="frontend/icons/compraaqui.png" id="compraaqui"></a></center>
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
        </div>   
        @endif

             
           @endforeach
      @endforeach   
   </div>
</div>
   <!--     fin globos   --> 
</div>

@endsection
