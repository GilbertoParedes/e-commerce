
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
        <form method="post" action="{{ route('cuenta.update',  $user_id) }}">
            @method('PATCH')
            @csrf
                <div class="row" >
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12" >    
                        <div class="form-group">
                          <p for="nombre" id="textos">Nombre:</p>
                          <input type="text" class="input_form" id="nombre" name="name" value="{{$name}} " required>
                        </div>
                        <div class="form-group">
                          <p for="text" id="textos">Apellido Paterno:</p>
                          <input type="text" class="input_form" name="apellido_p" value="{{$apellido_p}}" pattern="[A-Za-z]{5,15}" title="Solo se aceptan letras" required>
                        </div>
                        <div class="form-group">
                          <p for="text" id="textos">Apellido_materno:</p>
                          <input type="text" class="input_form" name="apellido_m" value="{{$apellido_m}}"  pattern="[A-Za-z]{5,15}" title="Solo se aceptan letras"required>
                        </div>
                        <div class="form-group">
                          <p for="tel" id="textos">Email</p>
                          <input type="email" class="input_form"  name="email" value="{{$email}}" required>
                        </div>    
                    </div>   

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12" id="marg" >
                             <div class="form-group">
                              <p for="tel" id="textos">Password anterior:</p>
                               <input type="password" class="input_form"  name="pass_anterior" required >  
                            </div>
                           <div class="form-group">
                              <p for="tel" id="textos">Password nueva:</p>
                               <input type="password" class="input_form"  name="password"  required>  
                            </div>
                           <div class="form-group">
                              <p for="tel" id="textos">Introducir nuevamente la password</p>
                               <input type="password" class="input_form"  name="pass_otra"  required>  
                            </div>               
                            <button type="submit" class="boton_enviar">Editar</button>
                    </div>  
         </form>
        </div> 
        </div> 
      </div>
    </div>
  </div>
</div>