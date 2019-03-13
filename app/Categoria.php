<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //nombre de la tabla
    protected $table='categoria';
    //atributos de la tabla
    protected $fillable = ['categoria'];
    
}
