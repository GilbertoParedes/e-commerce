@extends('frontend.layouts.layout_comprar_ahora_p2')
@section('title', 'HANA')
  
@section('content')
<div id="content">
<!-- slider1 -->
  <div class="row">
    <div class="col">
      <img  src="../storage/app/public/category/comprar_ahora.png" id="im">

    </div>
  </div>
<!-- fin slider -->
<br>
<!-- texto arreglos florales -->
  <div class="row">
      <div class="col-12" >
        <H1 id="txt"><img src="../public/frontend/images/descripcion/2.png" id="im_num">ELIGE UNA OPCIÓN DE ENTREGA</H1>
       <hr>
      </div>   
  </div>

  <div class="row">
      <div class="col-6" >
        <H1 id="txt_tipo1">Envío Estandar | Envío Gratis</H1>
      </div>   
      <div class="col-6" >
       <center> <H1 id="txt_tipo">Envío Premium | Envío $80</H1></center>
      </div>  
  </div>

    <div class="row">
      <div class="col-12" >
        <H1 id="txt"><img src="../public/frontend/images/descripcion/3.png" id="im_num">ELIGE UN MÉTODO DE PÁGO</H1>
       <hr>
      </div>   
  	</div>

	<div class="row" id="margen">
      <div class="col-12" >
        <H1 id="txt_subtitulos"><b>Tarjetas de crédito o débito</b></H1>
      </div> 
      <div class="col-12" >
        <p id="txt_subtitulos"><b>Ingresa la información del a tarjeta</b></p>
      </div>     
  	</div>
 	 <div class="row" id="margen">
	    <div class="col-sm-4" >
	        <p>Nombre del titular de la tarjeta</p>
	        <input type="text" name="">
	    </div>
	     <div class="col-sm-4" >
	        <p>Número de la tarjeta</p>
	        <input type="text" name="">
	    </div>
	    <div class="col-sm-4" >
	        <p></p>
	        <select name="month">
	        	@for ($i = 1; $i <13 ; $i++)
	        		{{-- expr --}}
	        	
	        	<option value="{{$i}}">{{$i}}</option>
	        	@endfor
	        </select>
	    </div>
	 </div> 
<br>

   
          
   <!--     fin globos   --> 
</div>
<div class="row">
  <div class="col-12">
    <img src="frontend/images/lomasvendido/tarjeta.png" id="tarjeta">
  </div>
</div>
@endsection
