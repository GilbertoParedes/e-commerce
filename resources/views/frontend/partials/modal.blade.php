<div id="miModal" class="modal2" >
  <div class="modal-contenido" >
    
   <div class="login-wrap">
  <div class="login-html">
        <a href="#"><img src="frontend/icons/x.png" id="x"></a>

    <center><img src="frontend/icons/LOGO_blanco.png" id="logo_login" ></center>
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">INICIA SESIÓN</label>
    <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">CREAR CUENTA</label>

    <div class="login-form">

      <div class="sign-in-htm">

        <div class="group">
          <input id="user" type="text"  placeholder="Correo electrónico *" class="input_modales">
        </div>
        <div class="group">
          <input type="text" id="fname" name="fname" placeholder="Contraseña*" class="input_modales">   
        </div>
        <div class="group">
          <center><p id="texto_login">Olvidé mi contraseña</p></center>
          <input type="submit" class="button" value="INICIAR SESIÓN">
          <input type="submit" class="button2" value="INICIA CON FACEBOOK">
        </div>
        <div class="group">
          <center><p id="texto_login">¿Eres nuevo en Hana?</p></center>
          <input type="submit" class="button" value="CREAR CUENTA">
        </div>
      </div>
      <div class="for-pwd-htm">
        <div class="group">
          <input id="nombre" type="text"  placeholder="Nombre" class="input_modales">
        </div>
        <div class="group">
          <input type="text" id="fname" name="fname" placeholder="Apellido" class="input_modales">  
        </div>
        <div class="group">
          <input id="nombre" type="text"  placeholder="Correo electrónico" class="input_modales">
        </div>
        <div class="group">
          <input type="text" id="fname" name="fname" placeholder="Contraseña" class="input_modales" class="input_pass">
          <p id="texto_login2">Mínimo 8 caracteres, una letra mayúscula y un número</p>
        </div>
        <div class="group">
          <input type="text" id="fname" name="fname" placeholder="Confirmar contraseña" class="input_modales" class="input_pass">
        </div>
        <br>
        <div class="group">
          
          <div class="row">
            <div class="col-sm-4">
              <select class="form-control form-control-sm" id="select">
                <option selected>Sexo</option>
                <option>Femenino</option>
                <option>Masculino</option>
              </select>
            </div>
            <div class="col-sm-4">
              <select class="form-control form-control-sm" id="select" value="Edad">
                <option>Edad</option>
                <option>Femenino</option>
                <option>Masculino</option>
              </select>
            </div>
          </div>
        </div><br>
        <div class="group">
          <p id="texto_login2">Fecha de aniversario (opcional)</p>
          <div class="row">
            <div class="col-sm-4">
              <select class="form-control  form-control-sm" id="select">
                <option>Día</option>
                <option>1</option>
                <option>2</option>
              </select>
            </div>
            <div class="col-sm-4">
              <select class="form-control form-control-sm" id="select" placeholder="Mes">
                <option>Mes</option>
                <option>Enero</option>
                <option>Febrero</option>
                <option>Marzo</option>
                <option>Abril</option>
                <option>Mayo</option>
                <option>Junio</option>
                <option>Julio</option>
                <option>Agosto</option>
                <option>Septiembre</option>
                <option>Octubre</option>
                <option>Noviembre</option>
                <option>Diciembre</option>
              </select>
            </div>
            <div class="col-sm-4">
              <select class="form-control form-control-sm" id="select">
                <option>Año</option>
                <option>1</option>
                <option>2</option>
              </select>
            </div>
          </div>
        </div> 
        <div class="group">
          <br>
          <input type="submit" class="button" value="CREAR CUENTA">
          <input type="submit" class="button2" value="REGÍSTRATE CON FACEBOOK">
          <p id="texto_login2"> ¿Ya tienes una cuenta?</p>
          <input type="submit" class="button" value="INICIA SESIÓN">
        </div>
      </div>
    </div>
  </div>
</div>
  </div>  
</div>