
<div class="topnav" id="myTopnav">
     <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-4 ">
         <div class="dropdown3">
              <a href="javascript:void(0);" class="icon" onclick="myFunction()"><img src="frontend/icons/menu.png" id="menu_icon" >  </a>
              <br><br><br><br>
              <div class="dropdown-content2">
                <ul>
                  <li><a href="#" id="texto1">VISITA POR PRIMERA VEZ</a></li>
                  <li><a href="contactanos" id="texto1">CONTÁCTANOS</a></li>
                </ul>
              </div>
         </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4 col-4 ">
        <center><a href="index"><img src="frontend/icons/logo.png" class="img-responsive" id="logotipo"></a></center>
      </div>
       <div class="col-lg-4 col-md-4 col-sm-4 col-4">
       <div id="alineacion">
            <img src="frontend/icons/lupa.png" id="iconos">
            <img src="frontend/icons/linea.png" id="linea">
            <img src="frontend/icons/carrito.png" id="iconos">
            <img src="frontend/icons/linea.png" id="linea">
            <img src="frontend/icons/corazon.png" id="iconos">
            <img src="frontend/icons/linea.png" id="linea">
            <img src="frontend/icons/perfil.png" id="iconos">
        </div>
      </div>
    </div>
<div class="row">

<div id="elementos_ocultos" >
  <div class="dropdowns"  >
        <center>
           <button class="dropbtn"><a href="visita_por_primera_vez" id="txt_oculto">VISITA POR PRIMERA VEZ</a></button>
        </center>
    </div>  
</div>
<div id="elementos">
       <div class="dropdowns">
          <center>
            <button class="dropbtn">
              <a href="lomasvendido" id="texto">LO MÁS VENDIDO</a>
            </button>
          </center>
      </div> 
</div>
<div id="elementos">
   <div class="dropdowns">
          <center>
            <button class="dropbtn">
              <a href="" id="texto">ARREGLOS -$450</a>
            </button>
          </center>
      </div> 
</div>
<div id="elementos">
        <div class="dropdowns">
          <center>  
            <button class="dropbtn">
              <a href="#" id="texto">CATEGORÍAS
                <img src="frontend/icons/flecha.png" id="flechita">
              </a> 
            </button>
          </center>

        <div class="dropdown-content">

    
            <a href="{{ route('catalogo.show','1') }}" id="texto2">CUMPLEAÑOS</a>
            <a href="{{ route('catalogo.show','2') }}" id="texto2">ANIVERSARIO</a>
            <a href="{{ route('catalogo.show','3') }}" id="texto2">COMPROMISOS Y BODAS</a> 
            <a href="{{ route('catalogo.show','4') }}" id="texto2">ENAMORADOS</a>
            <a href="{{ route('catalogo.show','5') }}" id="texto2">KIDS ZONE</a>
            <a href="{{ route('catalogo.show','6') }}" id="texto2">GRACIAS</a>
            <a href="{{ route('catalogo.show','7') }}" id="texto2">LO SIENTO</a>
            <a href="{{ route('catalogo.show','8') }}" id="texto2">MATERNIDAD</a>
            <a href="{{ route('catalogo.show','9') }}" id="texto2">¿POR QUÉ NO?</a>
            <a href="{{ route('catalogo.show','10') }}" id="texto2">GRADUACIONES</a>
            <a href="{{ route('catalogo.show','11') }}" id="texto2">NACIMIENTOS</a>
            <a href="{{ route('catalogo.show','12') }}" id="texto2">MEJÓRATE</a>       
        </div>
      </div> 
</div>
<div id="elementos" >
  <div class="dropdowns">
        <center>
            <button class="dropbtn"><a href="#" id="texto">GLOBOS
                <img src="frontend/icons/flecha.png" id="flechita"></a> 
            </button>
        </center>
        
        <div class="dropdown-content">
           <a href="globos" id="texto2">CUMPLEAÑOS</a>
           <a href="" id="texto2">MEJÓRATE</a>
           <a href="" id="texto2">NACIMIENTOS</a>
           <a href="" id="texto2">KIDS ZONE</a>
           <a href="" id="texto2">ENAMORADOS</a>
           <a href="" id="texto2">GRADUACIONES</a>
           <a href="" id="texto2">LETRAS Y NÚMEROS</a>
           <a href="" id="texto2">PAQUETES COMPLETOS</a>
        </div>
      </div> 
</div>

<div id="elementos" >
     <div class="dropdowns">
        <center>
           <button class="dropbtn"><a href=".php" id="texto">PAQUETES</a></button>
        </center>
     </div>
</div>
<div id="elementos" >
  <div class="dropdowns">
        <center>
           <button class="dropbtn"><a href=".php" id="texto">TEMPORADA</a></button>
        </center>
    </div> 
</div>
<div id="elementos_ocultos" >
    <div class="dropdowns">
        <center>
           <button class="dropbtn"><a href=".php" id="txt_oculto">CONTÁCTANOS</a></button>
        </center>
    </div>  
</div>

</div>

