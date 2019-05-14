<div class="modal fade" id="add_dir_Carrito" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Selecciona la ubicación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       @if ($cantidad_direcciones>0)  
        @foreach($dir as $items)
          <div class="alert alert-light" role="alert">
          
              <div class="row">
                <div class="col-md-3 col-sm-12 col-12" >
                  <img src="frontend/icons/prueba.png" id="icono_mapa">
                </div>
                 <div class="col-md-8 col-sm-4 col-12"  >
               
                   

                    <div class="row">
                          <div class="col-md-6 col-sm-12 col-12" >
                            <span id="direcciones">País: {{$items->pais}}</span>
                          </div>  
                          <div class="col-md-6 col-sm-12 col-12" >
                            <span id="direcciones">Estado: {{$items->estado}}</span>
                          </div> 
                            <div class="col-md-6  col-sm-12 col-12">
                             <span id="direcciones">Colonia: {{$items->colonia}}</span>
                          </div>
                          <div class="col-md-6 col-sm-12 col-12">
                             <span id="direcciones">Municipio: {{$items->municipio}}</span>
                          </div> 
                          <div class="col-md-6  col-sm-12 col-12">
                             <span id="direcciones">Calle: {{$items->calle}}</span>
                          </div>   
                            
                          <div class="col-md-6  col-sm-12 col-12">
                             <span id="direcciones">Código postal: {{$items->cp}}</span>
                          </div>   
                          <div class="col-md-6 col-sm-12 col-12">
                             <span id="direcciones">Teléfono: {{$items->telefono}}</span>
                          </div>   
                          <div class="col-md-6  col-sm-12 col-12">
                             <span id="direcciones">No.: {{$items->numero}}</span>
                          </div>   
                    </div> 
                 

                </div>
                <div class="col-md-1 col-sm-12 col-12" >

                      <form action="{{ route('direccion.destroy', $items->id)}}" method="post">
                      @csrf
                           @method('DELETE')
                         <center> <button class="btn " type="submit" style="background-color: transparent;"><img src="frontend/icons/x2.png" id="borrar_direccion" ></button></center>

                     </form>
                </div>
    
      
              </div> 
   
          </div>
      @endforeach 
      @else
        <div class="alert alert-light" role="alert">
          <div class="row" >
            <div class="col-12" >  
               <p for="tel" id="textos">Aún no tienes direcciones registradas...</p>
            </div>
          </div>
        </div>
      @endif
      </div>
    
    </div>
  </div>
</div>