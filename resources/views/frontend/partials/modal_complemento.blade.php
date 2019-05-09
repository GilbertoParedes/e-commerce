
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
          <div class="row" >
           @foreach($type_chocolate as $chocolate)
              <div class=" col-4" >        
                  <img src="/{{$chocolate->path}}" alt="Lo más vendido"  style="width:100%; padding-top: 5%;">
                   <div class="top-right">
                        <img src="../frontend/icons/circulo.png" id="circulos" >
                   </div>
                   <p id="descriptions" style="text-align: center;">{{ $chocolate->description }} <b>MX${{ $chocolate->quantity }}.00</b><br> {{ $chocolate->detalle }}</p>
              </div>
           @endforeach  
          </div> 

         <p for="nombre" id="textos">GLOBOS</p>
          <div class="row" >
           @foreach($type_globos as $globos)
              <div class=" col-4" >        
                  <img src="/{{$globos->path}}" alt="Lo más vendido"  style="width:100%; padding-top: 5%;">
                   <div class="top-right">
                        <img src="../frontend/icons/circulo.png" id="circulos" >
                   </div>
                   <p id="descriptions" style="text-align: center;">{{ $globos->description }} <b>MX${{ $globos->quantity }}.00</b><br> {{ $globos->detalle }}</p>
              </div>
           @endforeach  
          </div> 

          <p for="nombre" id="textos">PELUCHES</p>
          <div class="row" >
           @foreach($type_peluche as $peluche)
              <div class=" col-4" >        
                  <img src="/{{$peluche->path}}" alt="Lo más vendido"  style="width:100%; padding-top: 5%;">
                   <div class="top-right">
                        <img src="../frontend/icons/circulo.png" id="circulos" >
                   </div>
                   <p id="descriptions" style="text-align: center;">{{ $peluche->description }} <b>MX${{ $peluche->quantity }}.00</b><br> {{ $peluche->detalle }}</p>
              </div>
           @endforeach  
          </div> 

      </div>
  
    </div>
  </div>
</div>
