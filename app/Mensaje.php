<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
      //nombre de la tabla
    protected $table='mensaje';
    //atributos de la tabla
    protected $fillable = ['tipo', 'mensaje','usuario_id','carrito_id'];

   
	public function user()
    {
        return $this->belongsToMany('App\User','usuario_id');
    }

        public function carrito()
    {
        return $this->belongsToMany('App\Carrito','carrito_id');
    }
}
