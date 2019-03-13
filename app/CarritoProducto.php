<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarritoProducto extends Model
{
    //nombre de la tabla
    protected $table='carrito_producto';
    //atributos de la tabla
    protected $fillable = ['cantidad', 'carrito_id','producto_id'];
}
