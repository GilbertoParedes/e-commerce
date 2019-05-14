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
        <form method="POST" action="{{ route('login') }}">
           @csrf
            <div class="group">
              <input id="user" type="text"  placeholder="Correo electrónico *" class="input_modales" name="email" required>
            </div>
            <div class="group">
              <input type="password" id="fname" name="password" placeholder="Contraseña*" class="input_modales" required>   
            </div>
            <div class="group">
              <center><p id="texto_login">Olvidé mi contraseña</p></center>
              <input type="submit" class="button" value="INICIAR SESIÓN">
               <!--<input type="submit" class="button2" value="INICIA CON FACEBOOK">--> 
            </div>
        </form>
        <div class="group">
          <center><p id="texto_login">¿Eres nuevo en Hana?</p></center>
          <input type="submit" class="button" value="CREAR CUENTA">
        </div>
      </div>

{!! Form::open(['route' => 'cuenta.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

      <div class="for-pwd-htm">
        <div class="group">
          <input id="nombre" type="text"  placeholder="Nombre" name="name" class="input_modales" required>
        </div>
        <div class="group">
          <input type="text" id="apellido_p" name="apellido_p" placeholder="Apellido Paterno" name="apellido" class="input_modales" required>  
        </div>
        <div class="group">
          <input type="text" id="apellido_m" name="apellido_m" placeholder="Apellido Materno" name="apellido" class="input_modales" required>  
        </div>
        <div class="group">
          <input id="correo" type="email"  placeholder="Correo electrónico" name="correo" class="input_modales" required>
        </div>
        <div class="group">
          <input type="password" id="pass" name="pass" placeholder="Contraseña" class="input_modales" class="input_pass" required>
          <p id="texto_login2">Mínimo 8 caracteres, una letra mayúscula y un número</p>
        </div>
        <div class="group">
          <input type="password" id="pass2" name="pass2" placeholder="Confirmar contraseña" class="input_modales" class="input_pass" required>
        </div>
        <br>
        <div class="group">
          
          <div class="row">
            <div class="col-sm-4">
              <select class="form-control form-control-sm" id="select" name="sexo" required>
                <option selected>Sexo</option>
                <option value="H">Femenino</option>
                <option value="M">Masculino</option>
              </select>
            </div>
            <div class="col-sm-4">
              <select class="form-control form-control-sm" id="select" value="edad" name="edad" required>
                <option selected>Edad</option>
               @for ($i = 18; $i < 100; $i++)
                <option value="{{$i}}">{{$i}}</option>
               @endfor
              </select>
            </div>
          
          </div>
        </div><br>
        <div class="group">
          <p id="texto_login2">Fecha de aniversario (opcional)</p>
          <div class="row">
            <div class="col-sm-4">
              <input id="correo" type="date"   name="aniversario" class="input_modales">
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
  {!! Form::close() !!}

  <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
    </div>
  </div>
</div>
  </div>  
</div>
