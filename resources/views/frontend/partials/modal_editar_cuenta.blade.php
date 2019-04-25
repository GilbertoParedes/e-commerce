
<div class="modal fade" id="editarCuenta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">    
          <b for="tel" id="textos">Editar Cuenta</b>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <div class="row" >
            <div class="col-lg-6 col-md-6 col-sm-12 col-12" >    
                <div class="form-group">
                  <p for="nombre" id="textos">Nombre:</p>
                  <input type="text" class="input_form" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                  <p for="email" id="textos">Apellido Paterno:</p>
                  <input type="email" class="input_form" id="email" name="email">
                </div>
                <div class="form-group">
                  <p for="email" id="textos">Apellido_materno:</p>
                  <input type="email" class="input_form" id="email" name="email">
                </div>
                <div class="form-group">
                  <p for="tel" id="textos">Email</p>
                  <input type="text" class="input_form" id="tel" name="tel">
                </div>    
            </div>   

            <div class="col-lg-6 col-md-6 col-sm-12 col-12" id="marg" >
                   <div class="form-group">
                      <p for="tel" id="textos">Password:</p>
                       <input type="text" class="input_form" id="tel" name="tel"  >  
                    </div>
                   <div class="form-group">
                      <p for="tel" id="textos">Introducir nuevamente la password</p>
                       <input type="text" class="input_form" id="tel" name="tel"  >  
                    </div>               
                    <button type="submit" class="boton_enviar">Editar</button>
            </div>   
        </div> 
      </div>
    </div>
  </div>
</div>