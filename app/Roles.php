<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    //nombre de la tabla
    protected $table='roles';
    //atributos de la tabla
    protected $fillable = ['name', 'guard_name'];

}
