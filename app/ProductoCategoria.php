<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoCategoria extends Model
{
    //nombre de la tabla
    protected $table='producto_categoria';
    //atributos de la tabla
    protected $fillable = ['producto_id', 'categoria_id'];

    //relacion con tablas de clave foranea de productos
    public function product()
    {
        return $this->belongsToMany('App\Producto','producto_id');
    }

    //relacion con tablas de clave foranea de categoria
      public function category()
    {
        return $this->belongsToMany('App\Category','categoria_id');
    }
}
