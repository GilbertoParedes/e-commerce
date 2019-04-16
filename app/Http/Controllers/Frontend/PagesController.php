<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\User;

class PagesController extends Controller
{
    
 
    public function index()
    {
         return view('frontend.pages.index');
    }
 	
 	public function lomasvendido()
    {
 		return view('frontend.pages.lomasvendido');
     }

    public function paquetescompletos()
    {
         return view('frontend.pages.paquetescompletos');
    }
       public function contactanos()
    {
         return view('frontend.pages.contactanos');
    }
    public function visitaprimeravez(){
         return view('frontend.pages.visitaporprimeravez');

    }
}
