<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarritoProducto extends Model
{
    //nombre de la tabla
    protected $table='carrito_producto';
    //atributos de la tabla
    protected $fillable = ['cantidad', 'carrito_id','producto_id'];
   
    //relacion con tablas de clave foranea de categoria
      public function carrito()
    {
        return $this->belongsToMany('App\Carrito','carrito_id');
    }

     //relacion con tablas de clave foranea de productos
    public function product()
    {
        return $this->belongsToMany('App\Producto','producto_id');
    }

   
}
