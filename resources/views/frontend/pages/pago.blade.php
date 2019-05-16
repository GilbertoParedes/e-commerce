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
        <center><H1 id="txt_tipo1">Envío Estandar | Envío Gratis</H1></center>
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
        <p id="txt_subtitulo2">Ingresa la información del a tarjeta</p>
      </div>     
  	</div>
 	 <div class="row" id="margen">
	    <div class="col-lg-4 col-md-6 col-12" >
	        <p id="txt_subtitulo3"><b>Nombre del titular de la tarjeta</b></p>
	        <input type="text" name="cardname" id="campos_input">
	    </div>
	    <div class="col-lg-4 col-md-6 col-12" >
	        <p id="txt_subtitulo3"><b>Número de la tarjeta</b></p>
	        <input type="text" name="card_target" id="campos_input">
	    </div>
	    <div class="col-lg-4 col-md-12 col-12" >
	    	<div class="row">
	    		 <div class="col-lg-3 col-md-3 col-sm-3 col-6" >
		 			<p id="txt_subtitulo3"> <br></p>
			        <select name="month" id="select_month">
			        	@for ($i = 1; $i <13 ; $i++)
			        		{{-- expr --}}
			        	
			        	<option value="{{$i}}">{{$i}}</option>
			        	@endfor
			        </select>
	    		 </div>	
	    		 <div class="col-lg-3 col-md-3 col-sm-3 col-6" >
	    		 		<p id="txt_subtitulo3"> <br></p>
			        <select name="month" id="select_month">
			        	@for ($i = 2019; $i <2040 ; $i++)
			        		{{-- expr --}}
			        	
			        	<option value="{{$i}}">{{$i}}</option>
			        	@endfor
			        </select>
	    		 </div>
	    		 <div class="col-sm-5 col-12" >
	    		 	<p id="txt_subtitulo3"> <br></p>
	    		 	<button id="boton_pago">AÑADIR TU TARJETA</button>
	    		 </div>
	    	</div>
	       
	    </div>
	 </div> 
	<div class="row" id="margen">
      <div class=" col-12" >
        <H1 id="txt_subtitulos"><b>Pagos en tiendas de OXXO</b></H1>
      </div> 
      <div class="col-md-3 col-12" >
       	<button id="boton_pago1">VER TICKET PARA PAGAR</button>
      </div>     
  	</div>
  	<div class="row" id="margen">
      <div class="col-lg-4 col-md-6 col-12" >
        <H1 id="txt_subtitulos"><b>Tarjetas de regalos</b></H1>
        <p id="txt_subtitulo2">Ingresa el código</p>
        <input type="text" name="cardname" id="campos_input">
      </div> 
      <div class="col-lg-2 col-md-2 col-sm-6 col-12" >
    
        <button id="boton_pago2">APLICAR</button>
      </div>  
       <div class="col-lg-2 col-md-4 col-sm-6 col-12" >
       	<img src="../public/frontend/images/descripcion/TARJETA.png" id="tarjeta_regalo">
      </div>  
      <div class="col-lg-4 col-md-12 col-sm-12 col-12">
     
        <button id="boton_pago3">CONFIRMAR COMPRA</button>
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
