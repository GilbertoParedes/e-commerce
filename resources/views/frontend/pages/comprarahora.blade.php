@extends('frontend.layouts.layout_comprarahora')
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
        <H1 id="txt_globo">SELECCIONA UNA DIRECCIÓN DE ENVÍO</H1>
        <hr>
      </div>   
  </div>
<br>

<!--     GLOBOS   --> 
{!! Form::open(['route' => 'comprar.store', 'method' => 'post', 'class' => 'form-horizontal']) !!}
    <div class="row" >
        <div class="col-lg-6 col-md-6 col-sm-12 col-12" >
         
           
      
                <div class="form-group">
                  <p for="nombre" id="textos">NOMBRE/ Quien recibe:</p>
                  <input type="text" class="input_form" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                  <p for="direccion" id="textos">Dirección(calle, número de casa o interior, empresa)</p>
                  <input type="text" class="input_form" id="calle" name="calle" required>
                </div>
                <div class="form-group">
                
                </div>
                  <div class="form-group">
                    
                    <div class="row">
                    
                      <div class="col-sm-6" >
                        <p for="cp" id="textos">No.</p>
                        <input type="text" class="input_form" id="numero" name="numero"  >
                      </div>
                      <div class="col-sm-6 " >
                          <p for="cp" id="textos">Código postal</p>
                          <input type="text" class="input_form" id="cp" name="cp" required>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                  <p for="estado" id="textos">Estado</p>
                   <input type="text" class="input_form" id="estado" name="estado"  placeholder="Nayarit">  
                </div>
                <div class="form-group">
                  <p for="ciudad" id="textos">Municipio</p>
                   <input type="text" class="input_form" id="municipio" name="municipio">  
                </div>
                <div class="form-group">
                  <p for="colonia" id="textos">Colonia</p>
                   <input type="text" class="input_form" id="colonia" name="colonia">  
                </div>
                 <div class="form-group">
                  <p for="tel" id="textos">Teléfono celular 10 dígitos</p>
                   <input type="text" class="input_form" id="tel" name="tel">  
                </div>

        </div>   

    <div class="col-lg-6 col-md-6 col-sm-12 col-12" id="marg" >
    
 
               <div class="form-group">
                  <p for="nombre" id="textos">Información Adicional</p>
                </div>
                <div class="form-group">
                  <p for="nombre" id="textos">Tipo de dirección</p>
                  <select class="input_form"  id="type" name="type_dir">
                    <option value="Residencial">Residencial</option>
                   
                  </select>
                </div>


                <div class="form-group">
                    <p for="email" id="textos">Entre calles</p>
                    <div class="row">
                      <div class="col-sm-6 " >
                        <input type="text" class="input_form" id="calle_a" name="calle_a"  placeholder="Calle 1">
                      </div>
                      <div class="col-sm-6" >
                        <input type="text" class="input_form" id="calle_b" name="calle_b"  placeholder="Calle 2">
                      </div>
                    </div>
                </div>
                <div class="form-group">
                  <p for="referencia" id="textos">Referencias</p>
                  <input type="text" class="input_form" id="referencia" name="referencia" placeholder="Nos ayuda a ubicar mejor la dirección">
                </div>
                <div class="form-group">
                  <p for="facturar" id="textos">¿En esta también la dirección de factuación (la dirección que aparece en tu tarjeta de crédito o extracto bancario)?</p>
                   <div id="textos"> <input type="radio" name="facturar" value="Si">SÍ<br></div>
                   <div id="textos">  <input type="radio" name="facturar" value="No" checked> No (Si no, te lo pediremos dentro de un momento)<br></div>
                </div>
                <button type="submit" class="boton_enviar">CONTINUAR</button>  
        </div>  
    </div> 
{!! Form::close() !!}     
   <!--     fin globos   --> 
</div>
<div class="row">
  <div class="col-12">
    <img src="frontend/images/lomasvendido/tarjeta.png" id="tarjeta">
  </div>
</div>
@endsection
