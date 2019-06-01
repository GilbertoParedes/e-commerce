<div class=" text-center banner_correo" >
  <div id="banner_contenedor">

    {!! Form::open(['route' => 'promociones.store', 'method' => 'post', 'class' => 'form-horizontal']) !!}
     <div class="row">
        <div class="col" >
            <p id="texto_ofertas">Recibe las mejores ofertas y más </p>
        </div>
        <div class="col-md" >
            <input type="text"  id="correo" class="correo" name="correo" placeholder="  Ingresa tu correo electrónico" required><button id="btn_4">ENVIAR</button> 
        </div>
        <div class="col" >
             <p id="texto_oferta">Síguenos en
             <img src="frontend/icons/logo face.png" id="iconos_banner" onclick="imageClick('#')"> 
             <img src="frontend/icons/logo instagram.png" id="iconos_banner" onclick="imageClick('#')">
             </p> 
        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>
