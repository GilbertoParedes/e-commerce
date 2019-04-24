@extends('frontend.layouts.layout_carrito')
@section('title', 'Carrito de compras')
  
@section('content')

	<div id="content">
	<!-- slider1 -->
	  <div class="row">
	    <div class="col">
	      <img  src="frontend/images/carritocompras/banner.png" id="im">

	    </div>
	  </div>
	<!-- fin slider -->
	<!-- texto arreglos florales -->
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

	  <div class="row">
	  	<div class="col-md-9 col-sm-12 col-12" >
	  		<div class="table-responsive">
			  	<table class="table">
				    <thead id="thead">
				      <tr>
				        <td>PRODUCTO</td>
				        <td>PRECIO</td>
				        <td>CANTIDAD</td>
				        <td>TOTAL</td>
				        <td></td>
				      </tr>
				    </thead>
				    <tbody>
				    <!-- registros de prueba, será dinámico -->

				      <tr id="contenido_tabla">
				        <td><img src="frontend/images/productos/globo 1.png" id="producto"></td>
				        <td id="valores">$800</td>
				        <td id="valores">
				        	<input type="number" value="1" min="0" max="1000" step="1"/>
				        </td>
				        <td id="valores">$800</td>
				        <td id="valores">
				        	<img src="frontend/icons/x2.png" width="13px">
				        </td>
				      </tr>  
				        <tr id="contenido_tabla">
				        <td><img src="frontend/images/productos/globo 1.png" id="producto"></td>
				        <td id="valores">$800</td>
				        <td id="valores">
				        	<input type="number" value="1" min="0" max="1000" step="1"/>
				        </td>
				        <td id="valores">$800</td>
				        <td id="valores">
				        	<img src="frontend/icons/x2.png" width="13px">
				        </td>
				      </tr> 
				    </tbody>
				  </table>
			</div>	
	  	</div>
	  	<div class="col-md-3 col-sm-12 col-12" >
	  		<div class="row" id="cont_tab">
	  			<div class="col-12" id="thead">
	  				<p id="cabecera">SUBTOTALES</p>
	  			</div>
	  			<div class="col-12" >
	  				<p id="subtotal">SUBTOTAL</p>
	  			</div>
	  			<div class="col-12" >
	  				<strong><p id="sub">$2,697</p></strong>
	  			</div>
	  			<div class="col-12">
	  				<button id="pagar">IR A PAGAR</button>
	  			</div>
	  			<div class="col-12">
      				 <div class="vl"></div>
	  			</div>
	  			<div class="col-12">
	  				<center><img src="frontend/images/carritocompras/carro.png" id="carro"></center>
	  			</div>
	  			<div class="col-12">
      				<p id="envio">ENVÍO GRATIS</p>
      				<div class="vl"></div>
	  			</div>
	  			<div class="col-12">
	  				<center><a href="comprarahora"><img src="frontend/images/carritocompras/cuadro.png" id="cuadro"></a></center>
	  			</div>
	  		</div>
	  	</div>
	  </div>

  <div class="row">
          <div class="col" >
               <img src="frontend/images/misfavoritos/PENSADOS.png" alt="Lo más vendido"  style="width:100%; ">
          </div>   
    </div>

<div class="row">
        <div class="col-md-3 col-sm-3 col-6" >
         
             <img src="frontend/images/lomasvendido/globo 1.png" alt="Lo más vendido"  style="width:100%; padding-top: 5%;">
              <div class="top-right"><img src="frontend/icons/corazon3.png" id="corazon"></div>

             <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-8 col-8" >
                     <center> <p  id="precio" >$299.00</p></center>
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
        <div class="col-md-3 col-sm-3 col-6" >
             <img src="frontend/images/lomasvendido/globo 2.png" alt="Lo más vendido"  style="width:100%; padding-top: 5%;">
             <div class="top-right"><img src="frontend/icons/corazon3.png" id="corazon"></div>

             <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-8 col-8" >
                     <center> <p  id="precio" >$299.00</p></center>
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
        <div class="col-md-3 col-sm-3 col-6" >
             <img src="frontend/images/lomasvendido/globo 3.png" alt="Lo más vendido"  style="width:100%; padding-top: 5%;">
             <div class="top-right"><img src="frontend/icons/corazon3.png" id="corazon"></div>
             <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-8 col-8" >
                     <center> <p  id="precio" >$299.00</p></center>
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
        <div class="col-md-3 col-sm-3 col-6" >
             <img src="frontend/images/lomasvendido/globo 4.png" alt="Lo más vendido"  style="width:100%; padding-top: 5%;">
              <div class="top-right"><img src="frontend/icons/corazon3.png" id="corazon"></div>

            
             <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-8 col-8" >
                     <center> <p  id="precio" >$299.00</p></center>
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

   </div>

	<br>
</div>
@endsection