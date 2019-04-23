<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    
    public function cuenta()
    {
         return view('frontend.pages.count');
    }
 	
 
}
