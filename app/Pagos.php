<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
      //nombre de la tabla
    protected $table='pagos';
    //atributos de la tabla
    protected $fillable = ['idtransaction', 'status','usuario_id','carrito_id'];

	public function user()
    {
        return $this->belongsToMany('App\User','usuario_id');
    }

        public function carrito()
    {
        return $this->belongsToMany('App\Carrito','carrito_id');
    }
}
