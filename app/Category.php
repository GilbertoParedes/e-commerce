<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //nombre de la tabla
    protected $table='category';
    //atributos de la tabla
    protected $fillable = ['type','category','path'];
    
}
