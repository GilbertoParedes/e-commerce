<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deseable extends Model
{
    //nombre de la tabla
    protected $table='deseable';
    //atributos de la tabla
    protected $fillable = ['user_id', 'product_id'];
     
}
