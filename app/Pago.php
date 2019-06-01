<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
      //nombre de la tabla
    protected $table='pago';
    //atributos de la tabla
    protected $fillable = ['type_pay', 'comprar_ahora_id','fecha','hora'];

      public function comprar_ahora()
    {
        return $this->hasMany('App\ComprarAhora','comprar_ahora_id');
    }
}
