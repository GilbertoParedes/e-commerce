@extends('frontend.layouts.layout_edit_carrito')
@section('title', 'HANA')
  
@section('content')
<div class="row">
        <div class="col-12" >
          <div class="v0"></div>
        </div> 
</div>         
<div id="content">
<form method="post" action="{{ route('carrito.update',  $id_producto) }}">
            @method('PATCH')
            @csrf
<div class="row" id="margen_informacion">
	 			<div class="col-12">
                    	<center><h1 id="titulo"><b>Edita tu producto</b></h1></center>
                    	<hr>
                      </div>
                <div class="col-md-5 col-12">
                  	<img src="/{{$path}}" id="foto">
                </div>
                 <div class="col-md-7 col-12">
                    <div class="row"> 	
                      <div class="col-12">
                    	<p id="txt_globo">Nombre: {{$nombre}}</p>
                      </div>
                      <div class="col-12">
                    	<p id="txt_globo">Descripción: {{$descripcion}}</p>
                      </div>
                      <div class="col-12">
                    	<p id="txt_globo">Precio: ${{$precio}}.00</p>
                      </div>
                      <div class="col-md-2 col-3">
						<input type="number" name="cantidad" value="{{$cantidad}}" class="input_form" >
		              </div>
		            
		              <div class="col-12">
						<button type="submit" class="boton_enviar">Editar</button>
		              </div>
                    </div>
                 </div>
 
</div>
</form>
</div>
   

@endsection

