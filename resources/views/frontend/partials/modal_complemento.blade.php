
<div class="modal fade" id="modal_complemento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">    
        <center><img src="../frontend/images/descripcion/COMPLEMENTO.png" class="titulo"></center>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
      <div class="modal-body" id="margen_complementos">
         <p for="nombre" id="textos">CHOCOLATES</p>
          
        <!--   COMPLEMENTOS DE CHOCOLATES   -->     
       <div class="row" >
           @foreach($type_chocolate as $chocolates)
             @php
              {{$id_chocolate=$chocolates->id;}}
            @endphp
              <div class=" col-4" >        
                  <img src="/{{$chocolates->path}}" alt="Lo más vendido"  style="width:100%; padding-top: 5%;">
                   @if ($validar==1 && $carrito>0) 
                     @foreach ($buscar_carrito_producto as $value_Carrito)
                      @php
                        {{$id_prod=$value_Carrito->producto_id; $id_carrito_producto=$value_Carrito->id;}}
                      @endphp
                      @if ($carrito!=0 )
                        @if ($id_prod==$id_chocolate)
                         <div class="top-right">
                            {!! Form::open(['route' => 'complementos.store', 'method' => 'post']) !!}     
                                          <button type="submit" style="background-color: transparent;border-color: transparent;">
                                             <img src="../frontend/icons/circulo2.png" id="circulos" > 
                                          </button>  
                                          <input type="text" value="{{$id_carrito_producto}}" name="id_carrito_producto" id="input_transparent" >  
                                       
                            {!! Form::close() !!}  
                         </div>
                        @else
                           <div class="top-right">  
                             {!! Form::open(['route' => 'carrito.store', 'method' => 'post']) !!} 
                                     
                                        <button type="submit" style="background-color: transparent;border-color: transparent;">
                                           <img src="../frontend/icons/circulo.png" id="circulos" > 
                                        </button>  
                                         <input type="text" value="{{$id_chocolate}}" name="id_producto" id="input_transparent" >  
                                              
                            {!! Form::close() !!}  
                             </div> 
                        @endif

                      @else

                     @endif
                     @endforeach
                   @else

                   @endif
                   <p id="descriptions" style="text-align: center;">{{ $chocolates->description }} <b>MX${{ $chocolates->quantity }}.00</b><br> {{ $chocolates->detalle }}</p>
              </div>
           @endforeach  
          </div> 
<!--   COMPLEMENTOS DE CHOCOLATES   -->
    
<!--   COMPLEMENTOS DE GLOBOS   -->
         <p for="nombre" id="textos">GLOBOS</p>
           <div class="row" >
           @foreach($type_globos as $globos)
             @php
              {{$id_chocolate=$globos->id;}}
            @endphp
              <div class=" col-4" >        
                  <img src="/{{$globos->path}}" alt="Lo más vendido"  style="width:100%; padding-top: 5%;">
                   @if ($validar==1 && $carrito>0) 
                     @foreach ($buscar_carrito_producto as $value_Carrito)
                      @php
                        {{$id_prod=$value_Carrito->producto_id; $id_carrito_producto=$value_Carrito->id;}}
                      @endphp
                      @if ($carrito!=0 )
                        @if ($id_prod==$id_chocolate)
                         <div class="top-right">
                            {!! Form::open(['route' => 'complementos.store', 'method' => 'post']) !!}     
                                          <button type="submit" style="background-color: transparent;border-color: transparent;">
                                             <img src="../frontend/icons/circulo2.png" id="circulos" > 
                                          </button>  
                                          <input type="text" value="{{$id_carrito_producto}}" name="id_carrito_producto" id="input_transparent" >  
                                       
                            {!! Form::close() !!}  
                         </div>
                        @else
                           <div class="top-right">  
                             {!! Form::open(['route' => 'carrito.store', 'method' => 'post']) !!} 
                                     
                                        <button type="submit" style="background-color: transparent;border-color: transparent;">
                                           <img src="../frontend/icons/circulo.png" id="circulos" > 
                                        </button>  
                                         <input type="text" value="{{$id_chocolate}}" name="id_producto" id="input_transparent" >  
                                              
                            {!! Form::close() !!}  
                             </div> 
                        @endif

                      @else

                     @endif
                     @endforeach
                   @else

                   @endif
                   <p id="descriptions" style="text-align: center;">{{ $globos->description }} <b>MX${{ $globos->quantity }}.00</b><br> {{ $globos->detalle }}</p>
              </div>
           @endforeach  
          </div> 

          <p for="nombre" id="textos">PELUCHES</p>
         <!--   COMPLEMENTOS DE PELUCHES   -->
           <div class="row" >
           @foreach($type_peluche as $peluche)
             @php
              {{$id_chocolate=$peluche->id;}}
            @endphp
              <div class=" col-4" >        
                  <img src="/{{$peluche->path}}" alt="Lo más vendido"  style="width:100%; padding-top: 5%;">
                   @if ($validar==1 && $carrito>0) 
                     @foreach ($buscar_carrito_producto as $value_Carrito)
                      @php
                        {{$id_prod=$value_Carrito->producto_id; $id_carrito_producto=$value_Carrito->id;}}
                      @endphp
                      @if ($carrito!=0 )
                        @if ($id_prod==$id_chocolate)
                         <div class="top-right">
                            {!! Form::open(['route' => 'complementos.store', 'method' => 'post']) !!}     
                                          <button type="submit" style="background-color: transparent;border-color: transparent;">
                                             <img src="../frontend/icons/circulo2.png" id="circulos" > 
                                          </button>  
                                          <input type="text" value="{{$id_carrito_producto}}" name="id_carrito_producto" id="input_transparent" >  
                                       
                            {!! Form::close() !!}  
                         </div>
                        @else
                           <div class="top-right">  
                             {!! Form::open(['route' => 'carrito.store', 'method' => 'post']) !!} 
                                     
                                        <button type="submit" style="background-color: transparent;border-color: transparent;">
                                           <img src="../frontend/icons/circulo.png" id="circulos" > 
                                        </button>  
                                         <input type="text" value="{{$id_chocolate}}" name="id_producto" id="input_transparent" >  
                                              
                            {!! Form::close() !!}  
                             </div> 
                        @endif

                      @else

                     @endif
                     @endforeach
                   @else

                   @endif
                   <p id="descriptions" style="text-align: center;">{{ $peluche->description }} <b>MX${{ $peluche->quantity }}.00</b><br> {{ $peluche->detalle }}</p>
              </div>
           @endforeach  
          </div>

      </div>
  
    </div>
  </div>
</div>
