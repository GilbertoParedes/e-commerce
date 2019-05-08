@extends('frontend.layouts.layout_comprarahora')
@section('title', 'HANA')
  
@section('content')
<div id="content">
<!-- slider1 -->
  <div class="row">
    <div class="col">
      <img  src="frontend/images/unasesorresolvera/banner.png" id="im">

    </div>
  </div>
<!-- fin slider -->
<br>
<!-- texto arreglos florales -->
  <div class="row">
      <div class="col-12" >
        <H1 id="txt_globo">SELECCIONA UNA DIRECCIÓN DE ENVÍO</H1>
        <hr>
      </div>   
  </div>
<br>

<!--     GLOBOS   --> 


    <div class="row" >
        <div class="col-lg-6 col-md-6 col-sm-12 col-12" >
         
           
              <form action="/action_page.php" >
                <div class="form-group">
                  <p for="nombre" id="textos">NOMBRE/ Quien recibe:</p>
                  <input type="text" class="input_form" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                  <p for="email" id="textos">Dirección(calle, número de casa o interior, empresa)</p>
                  <input type="email" class="input_form" id="email" name="email">
                </div>
                <div class="form-group">
                  <p for="tel" id="textos">Código postal</p>
                  <input type="text" class="input_form" id="tel" name="tel">
                </div>
                <div class="form-group">
                  <p for="tel" id="textos">Estado</p>
                   <input type="text" class="input_form" id="tel" name="tel"  placeholder="Nayarit">  
                </div>
                <div class="form-group">
                  <p for="tel" id="textos">Ciudad</p>
                   <input type="text" class="input_form" id="tel" name="tel">  
                </div>
                <div class="form-group">
                  <p for="tel" id="textos">Colonia</p>
                   <input type="text" class="input_form" id="tel" name="tel">  
                </div>
                 <div class="form-group">
                  <p for="tel" id="textos">Teléfono celular 10 dígitos</p>
                   <input type="text" class="input_form" id="tel" name="tel">  
                </div>
              </form>

        </div>   

    <div class="col-lg-6 col-md-6 col-sm-12 col-12" id="marg" >
    
       <form action="/action_page.php" >
              
               <div class="form-group">
                  <p for="nombre" id="textos">Información Adicional</p>
                </div>
                <div class="form-group">
                  <p for="nombre" id="textos">Tipo de dirección</p>
                  <input type="text" class="input_form" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                    <p for="email" id="textos">Entre calles</p>
                    <div class="row">
                      <div class="col-sm-6 " >
                        <input type="text" class="input_form" id="tel" name="tel"  placeholder="Calle 1">
                      </div>
                      <div class="col-sm-6" >
                        <input type="text" class="input_form" id="tel" name="tel"  placeholder="Calle 2">
                      </div>
                    </div>
                </div>
                <div class="form-group">
                  <p for="tel" id="textos">Referencias</p>
                  <input type="text" class="input_form" id="tel" name="tel" placeholder="Nos ayuda a ubicar mejor la dirección">
                </div>
                <div class="form-group">
                  <p for="tel" id="textos">¿En esta también la dirección de factuación (la dirección que aparece en tu tarjeta de crédito o extracto bancario)?</p>
                   <div id="textos"> <input type="checkbox" name="vehicle" value="Bike">SÍ<br></div>
                   <div id="textos">  <input type="checkbox" name="vehicle" value="Car" checked> No (Si no, te lo pediremos dentro de un momento)<br></div>
                </div>
                <button type="submit" class="boton_enviar">CONTINUAR</button>

              </form>
    </div>   
</div> 
          
   <!--     fin globos   --> 
</div>
<div class="row">
  <div class="col-12">
    <img src="frontend/images/lomasvendido/tarjeta.png" id="tarjeta">
  </div>
</div>
@endsection
