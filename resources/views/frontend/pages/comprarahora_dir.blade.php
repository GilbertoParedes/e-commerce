@extends('frontend.layouts.layout_comprar_ahora_p1')
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

  {{--  --}}
   {!! Form::open(['route' => 'comprar_parte_1.store', 'method' => 'post', 'class' => 'form-horizontal']) !!}
          <div id="margen">   
             <div class="form-group">
                  <p for="nombre" id="textos">NOMBRE/ Quien recibe:</p>
                  <input type="text" class="input_form" id="nombre" name="nombre">
             </div>
             <div class="form-group">
                  <p for="tel" id="textos">¿En esta también la dirección de factuación (la dirección que aparece en tu tarjeta de crédito o extracto bancario)?</p>
                   <div id="textos"> <input type="radio" name="facturar" value="si">SÍ<br></div>
                   <div id="textos">  <input type="radio" name="facturar" value="no" checked> No (Si no, te lo pediremos dentro de un momento)<br></div>
             </div>
          </div>
          @foreach ($dir as $element)
          <div id="margen_comprar_ahora">
         
              <div class="row">
                <div class="col-md-3 col-sm-12 col-12" >
                  <img src="frontend/icons/prueba.png" id="icono_mapa">
                </div>
                   <div class="col-md-7 col-sm-4 col-12"  >
                    <div class="row">
                          <div class="col-md-6 col-sm-12 col-12" >
                            <span id="direcciones">País: {{$element->pais}}</span>
                          </div>  
                          <div class="col-md-6 col-sm-12 col-12" >
                            <span id="direcciones">Estado: {{$element->estado}}</span>
                          </div> 
                            <div class="col-md-6  col-sm-12 col-12">
                             <span id="direcciones">Colonia: {{$element->colonia}}</span>
                          </div>
                          <div class="col-md-6 col-sm-12 col-12">
                             <span id="direcciones">Municipio: {{$element->municipio}}</span>
                          </div> 
                          <div class="col-md-6  col-sm-12 col-12">
                             <span id="direcciones">Calle: {{$element->calle}}</span>
                          </div>   
                            
                          <div class="col-md-6  col-sm-12 col-12">
                             <span id="direcciones">Código postal: {{$element->cp}}</span>
                          </div>   
                          <div class="col-md-6 col-sm-12 col-12">
                             <span id="direcciones">Teléfono: {{$element->telefono}}</span>
                          </div>   
                          <div class="col-md-6  col-sm-12 col-12">
                             <span id="direcciones">No.: {{$element->numero}}</span>
                          </div>   
                    </div> 
                </div>
                <div class="col-md-2 col-sm-12 col-12" >
                     
                         <input type="text" id="id_dir" name="id_dir"  value="{{$element->id}}" class="transparente">  
                         <center> 
                            <button type="submit" class="btn boton_enviar">ELEGIR</button>
                         </center>
                    
                </div>
              </div> 
          </div>
          @endforeach

         {!! Form::close() !!}


   
          
   <!--     fin globos   --> 
</div>
<div class="row">
  <div class="col-12">
    <img src="frontend/images/lomasvendido/tarjeta.png" id="tarjeta">
  </div>
</div>
@endsection
