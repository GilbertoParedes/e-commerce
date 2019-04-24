<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ComprarController extends Controller
{
    
    public function comprar()
    {
         return view('frontend.pages.comprarahora');
    }
 	
 	public function guardar(Request $request){
 		//return view('fronted.pages.comprarahora2');
 	}

 
}
