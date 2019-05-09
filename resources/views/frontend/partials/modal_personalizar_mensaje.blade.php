
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
    {!! Form::open(['route' => 'direccion.store', 'method' => 'post', 'class' => 'form-horizontal']) !!}
      <div class="modal-body ">
          <div class="row" >
            <div class=" col-12" >        
                    <div class="form-group">
                      <p for="nombre" id="textos"><input type="radio" value="">CANCIÓN</p>
                      <input type="text" class="input_form" id="nombre" name="nombre">
                    </div>
                    <div class="form-group">
                      <p for="email" id="textos"><input type="radio" value="">CARTA</p>
                      <textarea id="mensaje" name="mensaje"></textarea>       
                    </div>   
                    <div class="form-group">
                      <p for="tel" id="textos"><input type="radio" value="">POEMA</p>
                      <textarea id="mensaje" name="mensaje"></textarea>       
                    </div>    
                     <button type="submit" class="boton_enviar">LISTO</button>           
            </div>   
          </div> 
      </div>
    {!! Form::close() !!}
  
    </div>
  </div>
</div>