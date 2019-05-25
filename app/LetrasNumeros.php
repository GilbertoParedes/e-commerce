<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LetrasNumeros extends Model
{
      //nombre de la tabla
    protected $table='letras_numeros';
    //atributos de la tabla
    protected $fillable = ['letras', 'numeros','usuario_id','carrito_producto_id','carrito_id'];

    public function user()
    {
        return $this->belongsToMany('App\User','usuario_id');
    }
       public function carrito()
    {
        return $this->belongsToMany('App\Carrito','carrito_id');
    } 
   public function carrito_producto()
    {
        return $this->belongsToMany('App\CarritoProducto','carrito_producto_id');
    } 
}
