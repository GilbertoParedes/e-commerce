<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //nombre de la tabla
    protected $table='permissions';
    //atributos de la tabla
    protected $fillable = ['name', 'guard_name'];
}
