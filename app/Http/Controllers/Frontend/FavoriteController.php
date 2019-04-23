<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Deseable;


class FavoriteController extends Controller
{
    
    public function index()
    {
         return view('frontend.pages.favoritos');
    }
 	
 
}
