<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //nombre de la tabla
    protected $table='producto';
    //atributos de la tabla
    protected $fillable = ['nombre', 'descripcion','cantidad','stock'];
}
