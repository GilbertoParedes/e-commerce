<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    //nombre de la tabla
    protected $table='carrito';
    //atributos de la tabla
    protected $fillable = ['fecha_inicio', 'fecha_fin','status','usuario_id'];
}
