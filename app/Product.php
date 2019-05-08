<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //nombre de la tabla
    protected $table='product';
    //atributos de la tabla
    protected $fillable = ['name','type', 'description','desc_b','desc_c','detalle','price','quantity','stock','path'];

    public function deseable()
    {
        return $this->hasMany('App\Deseable','producto_id');
    }
}
