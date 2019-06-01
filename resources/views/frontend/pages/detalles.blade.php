@extends('frontend.layouts.layout_productos')
@section('title', 'HANA')
  
@section('content')
<div class="row">
        <div class="col-12" >
          <div class="v0"></div>
        </div> 
</div>         
<div id="content">

<!--    TITULO GLOBOS   --> 
    <div class="row">
          <div class="col-md-5 col-sm-12 col-12" >
              <img src="/{{ $product->path }}" id="producto">
          </div>  
          <div class="col-md-1 col-sm-12 col-12" >
               <div class="v2"></div>
          </div>
          <div class="col-md-5 col-sm-12 col-12" >
   
              <div class="row">
                 <div class="col-12">
                    <p id="categoria">{{ $product->type }}</p>
                    <p id="tipo"><b> {{ $product->name }}</b></p>
                    <p id="txt_desc1">{{ $product->description }}</p>
                 </div>
                 
                 <div class="col-6">
                    <p id="txt_envio">Envío personal sin cargo</p>
                 </div>
                 <div class="col-6">
                    <p id="txt_costo"><b>MX${{ $product->quantity }}.00</b></p>
                 </div>

    <!--    BOTONES   -->     
     {!! Form::open(['route' => 'carrito.store', 'method' => 'post']) !!}
                 <div class="row" id="botones">
                  <div class="col-12">
                    <input type="text" value="{{$product->id}}" name="id_producto" id="input_transparent" >
                 </div>

                 <div class="col-6">  
                      <a href="{{route('catalogo.show', $product->id)}}">
                          @php
                            {{ $icono="btn0"; }}
                          @endphp
                          @foreach($deseable_buscar as $favoritos)
                            @if($favoritos->product_id==$product->id)
                              @php
                                {{ $icono="btn1"; }}
                              @endphp
                            @else
                            @endif           
                          @endforeach
                                <img src="../frontend/images/descripcion/{{$icono}}.png" id="btns1" ">
                      </a>
                 </div>

                 <div class="col-6">
                      <button type="submit" style="background-color: transparent;border-color: transparent; width:100%" >
                       <img src="../frontend/images/descripcion/btn2.png" id="btns2">
                      </button>    
                 </div>

               </div>
     {!! Form::close() !!}




                 <div class="col-12">
                    <p id="txt_desc2">{{ $product->desc_b}}</p>
                 </div>
                
     <!--   
      <div class="col-12">
                    <center><p id="txt_completa"><b>COMPLEMENTA TU PEDIDO</b></p></center>
                 </div>

                 <div class="col-md-5 col-sm-6 col-5">
                   <div class="row">
                     <div class="col-12">
                        <p id="txt_comp">Chocolates</p>
                     </div>
                     <div class="col-12">
                        <p id="txt_comp">Globos</p>
                     </div>
                     <div class="col-12">
                        <p id="txt_comp">Peluches</p>
                     </div>
                   </div>
                 </div>

                 <div class="col-1">
                     <div class="v5"></div>
                 </div>

                 <div class="col-md-5 col-sm-5 col-5">
                   <div class="row">
                     <div class="col-12">
                        <p id="cantidad">1 <input type="number" name="cantidad" id="input_cantidad"> + $170.00</p>  
                     </div>
                     <div class="col-12">
                        <p id="cantidad">2 <input type="number" name="cantidad" id="input_cantidad"> + $299.00</p>
                     </div>
                     <div class="col-12">
                        <p id="cantidad">3 <input type="number" name="cantidad" id="input_cantidad"> + $350.00</p>
                     </div>
                   </div>
          </div>   

              -->
          </div> 
          <br>   
    </div>
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-4" >
        <center>
        <a href="#personalizarMensaje" data-toggle="modal">
         <img src="../frontend/images/descripcion/BOTON 2.png" id="boton_1">  
        </a> 
        </center>
      </div>
       <div class="col-sm-3 col-4" >
          <a href="#modal_complemento" data-toggle="modal">
           <img src="../frontend/images/descripcion/BOTON 3.png" id="boton_1" >
          </a>
       </div>   
     
        
       <div class="col-sm-1 col-3" >
      </div>  
       <div class="col-sm-4 col-6" >
        {!! Form::open(['route' => 'carrito_compras.store', 'method' => 'post']) !!}
        <button type="submit" style="background-color: transparent;border-color: transparent; width:100%">    
         <img src="../frontend/images/descripcion/boton 4.png" id="boton_2" >
         </button> 
         <input type="text" value="{{$product->id}}" name="id_producto" id="input_transparent" >
        {!! Form::close() !!}  
      </div> 
       <div class="col-sm-1 col-3" >
      </div>  
    </div>   
</div>

<!--     GLOBOS   --> 
<div class="container-fluid">

    <div class="row">
        <div class="col-12" >
          <div class="v3"></div>
        </div> 
        <div class="col-12" >
             <center><p id="articulos_similares"><b>ARTÍCULOS SIMILARES</b></p></center> 
        </div> 
        @foreach ($product_relacionados as $relacionados)
      
       
        <div class="col-lg-3 col-md-3 col-sm-3 col-6" >
             <a href="{{route('producto.show', $relacionados->id)}}">
              <img src="/{{$relacionados->path}}" alt="Lo más vendido"  style="width:100%; padding-top: 5%;">
             </a>
              <div class="top-right">
                         @if ($validar==1)
                         <a href="{{route('catalogo.show', $relacionados->id)}}">
                           @php
                             {{ $icono="corazon3"; }}
                           @endphp
                           @foreach($deseable_buscar as $favoritos)
                                @if($favoritos->product_id==$relacionados->id)

                                 @php
                                   {{ $icono="corazon4"; }}
                                 @endphp

                                @else
                                @endif 
                              
                           @endforeach
                          <img src="../frontend/icons/{{$icono}}.png" id="corazon">
                          </a>
                          @else
                          @endif
                      </div>
              <p id="txt_desc">{{$relacionados->description}}</p>
              <p id="precio">MX${{$relacionados->price}}</p>
        </div>   
        @endforeach
      
        <!--   detalles del producto --> 
          <div class="col-md-4 col-sm-3 col-3" id="r1" >
              <div class="v4"></div>
          </div>  
          <div class="col-md-4 col-sm-6 col-6" >
              <img src="../frontend/images/ventaindividual/detalles.png" id="detalles_producto">
          </div>   
           <div class="col-md-4 col-sm-3 col-3" id="r1" >
               <div class="v4"></div>              
          </div>  
        <!--  FIN detalles del producto --> 
          <div class="col-12" >
               <p id="detalle_especifico">{{ $product->desc_c }}
                <br><br>
              Arreglo compuesto por:
              <br><br>
              {{ $product->detalle }}<br> <br>

              Para Personalizar su arreglo o solicitar entregas en horarios especiales comuníquese con nosotros:
              <br> <br>
              Tel. XXXXXXXX | Whatsap: XXXXXXXXXX
              <br>

              </p>            
          </div> 

   </div>

</div>

</div>
   

@endsection