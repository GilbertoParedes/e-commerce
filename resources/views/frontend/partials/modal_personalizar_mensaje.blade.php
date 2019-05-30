
<div class="modal fade" id="personalizarMensaje" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document" >
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">    
        <center><img src="../frontend/images/descripcion/MENSAJE.png" class="titulo"></center>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    {!! Form::open(['route' => 'mensaje.store', 'method' => 'post', 'class' => 'form-horizontal']) !!}
      <div class="modal-body ">
          <div class="row" >
            <div class="col-12"> <p for="decir" id="textos">¿CÓMO LO QUIERES DECIR? </p></div>
            <div class=" col-12" >        
                    <div class="form-check">
                      <p for="nombre" id="textos">
                        <input class="form-check-input" type="radio" name="opciones" id="opciones" value="1" checked>
                        CANCIÓN
                      </p>
                      <input type="text" class="input_form" id="nombre" name="cancion">
                    </div>
                    <div class="form-check">
                      <p for="email" id="textos">  <input class="form-check-input" type="radio" name="opciones" id="opciones" value="2" >
                      CARTA</p>
                      <textarea id="mensaje" name="carta"></textarea>       
                    </div>   
                    <div class="form-check">
                      <p for="tel" id="textos">
                        <input class="form-check-input" type="radio" name="opciones" id="opciones" value="3">
                         POEMA</p>
                      <textarea id="mensaje" name="poema"></textarea>       
                    </div>    
                     <button type="submit" class="boton_enviar">LISTO</button>           
            </div>   

          </div> 
      </div>
    {!! Form::close() !!}
  
    </div>
  </div>
</div>