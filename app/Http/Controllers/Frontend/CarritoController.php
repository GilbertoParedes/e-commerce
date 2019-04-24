<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class CarritoController extends Controller
{
  	protected $user;
    // contructor de modelo para uso en cualquier método
    function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
       return view('frontend.pages.carrito');
    }
}