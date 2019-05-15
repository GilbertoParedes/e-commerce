<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComprarAhora extends Model
{
    //nombre de la tabla
    protected $table='comprar_ahora';
    //atributos de la tabla
    protected $fillable = ['titular', 'facturacion','carrito_id','direccion_id'];
    
      public function carrito()
    {
        return $this->belongsToMany('App\Carrito','carrito_id');
    } 
       public function direccion()
    {
        return $this->belongsToMany('App\Direction','direccion_id');
    } 
}
