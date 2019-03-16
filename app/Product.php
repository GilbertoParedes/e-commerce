<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //nombre de la tabla
    protected $table='product';
    //atributos de la tabla
    protected $fillable = ['name', 'description','quantity','stock'];

    public function deseable()
    {
        return $this->hasMany('App\Deseable','producto_id');
    }
}
