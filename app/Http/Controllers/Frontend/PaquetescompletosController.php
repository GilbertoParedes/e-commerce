<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\User;

class PaquetescompletosController extends Controller
{
    
 
    public function index()
    {
         return view('frontend.pages.paquetescompletos');
    }


}
