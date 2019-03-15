<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
      //nombre de la tabla
    protected $table='direccion';
    //atributos de la tabla
    protected $fillable = ['pais', 'estado','municipio','calle','colonia','cp','telefono','numero','usuario_id'];

      public function usuario()
    {
        return $this->hasMany('App\User','usuario_id');
    }
}
