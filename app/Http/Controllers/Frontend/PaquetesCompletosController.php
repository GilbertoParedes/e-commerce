<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductoCategoria;
use Illuminate\Support\Facades\Auth;
use Mail;
use Session;
use Redirect;

class PaquetesCompletosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         if (Auth::check()) {
            $id_usuario=Auth::id();
            $valor=1;
          }
          else{
            $valor=0;
          }
             return view('frontend.pages.letras_numeros')->with('validar',$valor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $letras=$request->casilla1; 
      $numeros=$request->casilla2; 
 // dd($letras[0],$letras[1],$letras[2],$letras[3],$letras[4],$letras[5]);
    
  
         if (Auth::check()) {
            $id_usuario=Auth::id();
            $valor=1;
           
            if(empty($letras[4] ){ 
                return view('frontend.pages.letras_numeros')->with('validar',$valor)->with('alert', 'Recuerda que debes seleccionar 5 letras y 2 números..');
            }
            else{
            if(empty($letras[5])){
               
                if (empty($numeros[2])) {
                 dd("muy bien");
                }
                else{
                     dd("algo salio mal");
                }
            }
            else{
                return view('frontend.pages.letras_numeros')->with('validar',$valor)->with('alert', 'Seleccionaste elementos de más!, recuerda que debes seleccionar 5 letras y 2 números..');
            }
            }
          }
          else{
            $valor=0;
          }
/*
        Mail::send('frontend.pages.contact', $request->all(),function($msj){
            $msj->subject('Correo de Contacto');
            $msj->to('lauratopaciovaldez@gmail.com');

        });
        Session::flash('message','mensaje enviado correctamente');
        return Redirect::to('/contactanos');
*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
