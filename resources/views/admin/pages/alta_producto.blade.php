@extends('admin.layouts.layout_admin')

@section('content')
<div class="container">
  <h2>Registro de productos</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="text">Nombre del producto:</label>
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
     <div class="form-group">
      <label for="text">Descripción:</label>
      <input type="text" class="form-control" id="descripcion"  name="descripcion">
    </div>
    <div class="form-group">
      <label for="text">Cantidad:</label>
      <input type="text" class="form-control" id="cantidad"  name="cantidad">
    </div>
    <div class="form-group">
      <label for="text">Stock:</label>
      <input type="text" class="form-control" id="cantidad"  name="cantidad">
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
</div>

@endsection
