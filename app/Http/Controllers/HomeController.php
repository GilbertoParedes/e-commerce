<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{
     protected $user;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->middleware('auth');
         $this->user = $user;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
         if (Auth::check()) {
                    $id_usuario=Auth::id();
                    // obtiene todos los regístros de la tabla users 
                    $autenticar_user= $this->user->where('id',  $id_usuario)->get();
                    foreach ($autenticar_user as $values) {
                      $type_user=$values->type_user;
                      if ($type_user=="Admin") {
                        $valor=1;
                        return view('admin.pages.dashboard');
                 }
              else{
                $valor=1;
                 return redirect('index')->with('validar',$valor);
              }
            }
        }
        else{
        $valor=0;
        return view('frontend.pages.index')->with('validar',$valor);
        }
    }
}
