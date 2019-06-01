<!-- Modal -->
<div class="modal fade" id="createUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Alta Producto </h4>
      </div>
      <div class="modal-body">
			<div class="outter-wp">
				<div class="forms-main">
					{!! Form::open(['route' => 'products.store', 'method' => 'post', 'class' => 'form-horizontal', 'files' => true]) !!}
						<div class="form-group">
							<label class="col-md-2 control-label">Nombre</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-user"></i>
									</span>
									<input type="text" class="form-control1 icon" name="name" placeholder="Nombre">
								</div>
							</div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Tipo</label>
						    <div class="col-md-8">
							    <select class="form-control1"  id="type" name="type">
							      <option>Selecciona el tipo de categoría</option>
							      <option value="Arreglo">Arreglo</option>
							      <option value="Globo">Globo</option>
							      <option value="Paquete">Paquetes</option>
							      <option value="Peluche">Peluche</option>
							      <option value="Chocolate">Chocolate</option>
							    </select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Desc. a</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1 icon" name="description" placeholder="Ingresa una descripción A">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Desc. b</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1 icon" name="desc_b" placeholder="Ingresa una descripción B">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Desc. c</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1 icon" name="desc_c" placeholder="Ingresa una descripción C">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Detalles</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1 icon" name="detalle" placeholder="Ingresa los detalles">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Precio</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1 icon" name="price" placeholder="Precio">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Cantidad</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1 icon" name="quantity" placeholder="Cantidad">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Stock</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1 icon" name="stock" placeholder="Stock">
								</div>
							</div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Categoría</label>
						    <div class="col-md-8">
							    <select class="form-control1"  id="category" name="category">
							      <option>Selecciona el tipo de categoría</option>
							      <option value="1">Arreglos-Cumpleaños</option>
							      <option value="2">Arreglos-Aniversario</option>
							      <option value="3">Arreglos-Compromisos y bodas</option>
							      <option value="4">Arreglos-Enamorados</option>
							      <option value="5">Arreglos-Kids Zone</option>
							      <option value="6">Arreglos-Gracias</option>
							      <option value="7">Arreglos-Lo siento</option>
							      <option value="8">Arreglos-Maternidad</option>
							      <option value="9">Arreglos-Por qué no</option>
							      <option value="10">Arreglos-Graduaciones</option>
							      <option value="11">Arreglos-Nacimientos</option>
							      <option value="12">Arreglos-Mejorate</option>
							      <option value="13">Globos-Cumpleaños</option>
							      <option value="14">Globos-Mejorate</option>
							      <option value="15">Globos-Nacimientos</option>
							      <option value="16">Globos-Kids Zone</option>
							      <option value="17">Globos-Enamorados</option>
							      <option value="18">Globos-Graduaciones</option>
							      <option value="19">Globos-Letras</option>
							      <option value="20">Paquetes Completos</option>
							      <option value="21">Paquetes</option>
							      <option value="22">Temporada</option>
							      <option value="23">Complementos</option>
							      <option value="24">Globos-Números</option>
							  


							    </select>
							</div>
						</div>
					    <div class="form-group">
							<label class="col-md-2 control-label">Imagen</label>
							<div class="col-md-8">
								<div class="input-group">
									<input type="file" class="form-control1 icon"  height="100px;" name="photo" placeholder="Perfíl" >
								</div>
							</div>
						</div>
						<div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					        <button type="submit" class="btn btn-primary">Guardar</button>
				      	</div>
				    {!! Form::close() !!}
				</div>
			</div>
      </div>
    </div>
  </div>
</div>
