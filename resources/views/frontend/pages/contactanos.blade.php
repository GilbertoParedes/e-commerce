@extends('frontend.layouts.layout_contactanos')
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
        <H1 id="txt_globo">ESCRÍBENOS Y ACLARAREMOS TUS DUDAS</H1>
        <hr>
      </div>   
  </div>
<br>

<!--     GLOBOS   --> 


    <div class="row" id="margen" >
        <div class="col-lg-12 col-md-12 col-sm-12 col-12" >
         
           
              <form action="/action_page.php" >
                <div class="form-group">
                  <p for="nombre" id="textos">NOMBRE</p>
                  <input type="text" class="input_form" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                  <p for="email" id="textos">CORREO ELECTRÓNICO</p>
                  <input type="email" class="input_form" id="email" name="email">
                </div>
                <div class="form-group">
                  <p for="tel" id="textos">TELÉFONO</p>
                  <input type="text" class="input_form" id="tel" name="tel">
                </div>
                 <div class="form-group">
                  <p for="tel" id="textos">MENSAJE</p>
                  <textarea id="mensaje" name="mensaje">
                    
                  </textarea>
                </div>
                <button type="submit" class="boton_enviar">ENVIAR</button>
              </form>
           
        </div>   
      
   </div>

   <!--     fin globos   --> 
</div>
@endsection
