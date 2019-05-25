@extends('frontend.layouts.layout_paquetescompletos')
@section('title', 'HANA')
  
@section('content')
  <style type="text/css">
    #un_div { display : none; }
</style>
<div id="content">
<!-- slider1 -->
  <div class="row">
    <div class="col">
      <img src="../storage/app/public/category/paquetes_completos.png"  alt="Photo of perfil" id="im">
    </div>
  </div>
<!-- fin slider -->
<br>
<!-- texto arreglos florales -->
  <div class="row">
      <div class="col-12" >
        <H1 id="txt_globo">ELIGE 5 LETRAS</H1>
        <hr>
      </div>   
  </div>

<script language="javascript">

function limitarSelección(casilla,form)

{

a = casilla.form.casilla1[0].checked;
b = casilla.form.casilla1[1].checked;
c = casilla.form.casilla1[2].checked;
d = casilla.form.casilla1[3].checked;
e = casilla.form.casilla1[4].checked;
f = casilla.form.casilla1[5].checked;
g = casilla.form.casilla1[6].checked;
h = casilla.form.casilla1[7].checked;
i = casilla.form.casilla1[8].checked;
j = casilla.form.casilla1[9].checked;
k = casilla.form.casilla1[10].checked;
l = casilla.form.casilla1[11].checked;
m = casilla.form.casilla1[12].checked;
n = casilla.form.casilla1[13].checked;
o = casilla.form.casilla1[14].checked;
p = casilla.form.casilla1[15].checked;
q = casilla.form.casilla1[16].checked;
r = casilla.form.casilla1[17].checked;
s = casilla.form.casilla1[18].checked;
t = casilla.form.casilla1[19].checked;
u = casilla.form.casilla1[20].checked;
v = casilla.form.casilla1[21].checked;
w = casilla.form.casilla1[22].checked;
x = casilla.form.casilla1[23].checked;
y = casilla.form.casilla1[24].checked;
z = casilla.form.casilla1[25].checked;
contador = (a ? 1 : 0) + (b ? 1 : 0) + (c ? 1 : 0) + (d ? 1 : 0) + (e ? 1 : 0)+ (f ? 1 : 0)+ (g ? 1 : 0)+ (h ? 1 : 0)+ (i ? 1 : 0) + (j ? 1 : 0) + (l ? 1 : 0) + (m ? 1 : 0)+ (n ? 1 : 0)+ (o ? 1 : 0)+ (p ? 1 : 0)+ (q ? 1 : 0)+ (r ? 1 : 0)+ (s ? 1 : 0)+ (t ? 1 : 0)+ (u ? 1 : 0)+ (v ? 1 : 0)+ (w ? 1 : 0)+ (x ? 1 : 0)+ (y ? 1 : 0)+ (z ? 1 : 0);

    if (contador > 5)

    {
    alert("Solo puedes seleccionar 5 letras");
    casilla.checked = false;
    }
}
function limitarSelección2(casillas,form)

{
n0=casillas.form.casilla2[0].checked;
n1=casillas.form.casilla2[1].checked;
n2=casillas.form.casilla2[2].checked;
n3=casillas.form.casilla2[3].checked;
n4=casillas.form.casilla2[4].checked;
n5=casillas.form.casilla2[5].checked;
n6=casillas.form.casilla2[6].checked;
n7=casillas.form.casilla2[7].checked;
n8=casillas.form.casilla2[8].checked;

contador2 = (n0 ? 1 : 0) + (n1 ? 1 : 0) + (n2 ? 1 : 0) + (n3 ? 1 : 0) + (n4 ? 1 : 0)+ (n4 ? 1 : 0)+ (n5 ? 1 : 0)+ (n6 ? 1 : 0)+ (n7 ? 1 : 0) + (n8 ? 1 : 0);

    if (contador2 > 2)

    {
    alert("Solo puedes seleccionar 2 números");
    casillas.checked = false;
    }
}
</script>

  {!! Form::open(['route' => 'letras_numeros.store', 'method' => 'post', 'class' => 'form-horizontal', 'target'=>"_blank"]) !!}
  <div class="row">
          <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="A" onClick="limitarSelección(this,this.form)">A</p>    
          </div>
          <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="B" onClick="limitarSelección(this,this.form)">B</p>    
          </div>
          <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="C" onClick="limitarSelección(this,this.form)">C</p>    
          </div>
          <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="D" onClick="limitarSelección(this,this.form)">D</p>    
          </div>
           <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="E" onClick="limitarSelección(this,this.form)">E</p>    
          </div>
          <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="F" onClick="limitarSelección(this,this.form)">F</p>    
          </div>
          <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="G" onClick="limitarSelección(this,this.form)">G</p>    
          </div>
          <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="H" onClick="limitarSelección(this,this.form)">H</p>    
          </div>
          <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="I" onClick="limitarSelección(this,this.form)">I</p>    
          </div>
           <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="J" onClick="limitarSelección(this,this.form)">J</p>    
          </div>
           <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="K" onClick="limitarSelección(this,this.form)">K</p>    
          </div>
           <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="L" onClick="limitarSelección(this,this.form)">L</p>    
          </div>
           <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="M" onClick="limitarSelección(this,this.form)">M</p>    
          </div>
            <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="N" onClick="limitarSelección(this,this.form)">N</p>    
          </div>
            <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="O" onClick="limitarSelección(this,this.form)">O</p>    
          </div>
            <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="P" onClick="limitarSelección(this,this.form)">P</p>    
          </div>
            <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="Q" onClick="limitarSelección(this,this.form)">Q</p>    
          </div>
            <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="R" onClick="limitarSelección(this,this.form)">R</p>    
          </div>
            <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="S" onClick="limitarSelección(this,this.form)">S</p>    
          </div>
            <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="T" onClick="limitarSelección(this,this.form)">T</p>    
          </div>
            <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="U" onClick="limitarSelección(this,this.form)">U</p>    
          </div>
            <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="V" onClick="limitarSelección(this,this.form)">V</p>    
          </div>
          <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="W" onClick="limitarSelección(this,this.form)">W</p>    
          </div>
            <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="X" onClick="limitarSelección(this,this.form)">X</p>    
          </div>
            <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="Y" onClick="limitarSelección(this,this.form)">Y</p>    
          </div>
            <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" id="checkbox" name="casilla1[]" value="Z" onClick="limitarSelección(this,this.form)">Z</p>    
          </div>
        
 </div>
<div class="row">
      <div class="col-12" >
        <H1 id="txt_globo">ELIGE 2 NÚMEROS</H1>
        <hr>
      </div>   
</div>
<br>
<div class="row">
          <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" name="casilla2[]" value="0" onClick="limitarSelección2(this,this.form)">0</p>    
          </div>
          <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" name="casilla2[]" value="1" onClick="limitarSelección2(this,this.form)">1</p>    
          </div>
          <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" name="casilla2[]" value="2" onClick="limitarSelección2(this,this.form)">2</p>    
          </div>
          <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" name="casilla2[]" value="3" onClick="limitarSelección2(this,this.form)">3</p>    
          </div>
           <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" name="casilla2[]" value="4" onClick="limitarSelección2(this,this.form)">4</p>    
          </div>
          <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" name="casilla2[]" value="5" onClick="limitarSelección2(this,this.form)">5</p>    
          </div>
          <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" name="casilla2[]" value="6" onClick="limitarSelección2(this,this.form)">6</p>    
          </div>
          <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" name="casilla2[]" value="7" onClick="limitarSelección2(this,this.form)">7</p>    
          </div>
          <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" name="casilla2[]" value="8" onClick="limitarSelección2(this,this.form)">8</p>    
          </div>
           <div class="col-md-1 col-sm-2 col-2" >
             <p id="texto_letras"><input type="checkbox" name="casilla2[]" value="9" onClick="limitarSelección2(this,this.form)">9</p>    
          </div>
 </div>      

<input type="submit" value="Enviar">

 {!! Form::close() !!}



<!--     GLOBOS   --> 

<div class="margen">
 
</div>
   <!--     fin globos   --> 
</div>

@endsection



