<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComprarAhora extends Model
{
    //nombre de la tabla
    protected $table='comprar_ahora';
    //atributos de la tabla
    protected $fillable = ['titular', 'facturacion','carrito_id','direccion_id'];
     
}
