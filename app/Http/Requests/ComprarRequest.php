<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComprarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
         
          'estado' => 'min:3|max:15|required',
          'municipio' => 'min:3|max:15|required',
          'calle' => 'min:3|max:30|required',
          'colonia' => 'min:3|max:15|required',
          'cp' => 'min:5|max:5|required',
          'telefono' => 'required|min:0|max:12',
          'numero' => 'required|min:1|max:6',
          'tipo_direccion' => 'required|min:5|max:20',
          'calle_a' => 'required|min:1|max:30',
          'calle_b' => 'required|min:1|max:30',
          'referencia' => 'required|min:1|max:60'
        ];
     

    }
}
