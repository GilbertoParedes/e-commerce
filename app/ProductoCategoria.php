<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoCategoria extends Model
{
    //nombre de la tabla
    protected $table='producto_categoria';
    //atributos de la tabla
    protected $fillable = ['producto_id', 'categoria_id'];
}
