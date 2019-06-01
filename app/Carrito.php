<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    //nombre de la tabla
    protected $table='carrito';
    //atributos de la tabla
    protected $fillable = ['fecha_inicio', 'fecha_fin','status','entregado','usuario_id'];

   public function user()
    {
        return $this->belongsTo('App\User','usuario_id');
    }
}
