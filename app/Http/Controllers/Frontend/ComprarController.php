<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class ComprarController extends Controller
{
    public function index()
    {
		if (Auth::check()) {
            $valor=1;
            //extraer id del usuario
            $id_usuario=Auth::id();
            return view('frontend.pages.comprarahora')->with('validar',$valor);
   
        }
        else{
        	$valor=0;
		  	return view('frontend.pages.index')->with('validar',$valor)->with('alert', 'Inicia sesión para poder realizar una compra');
        }
    }
   
 
}
