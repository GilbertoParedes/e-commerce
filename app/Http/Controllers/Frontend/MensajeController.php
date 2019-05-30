<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Deseable;
use App\Carrito;
use App\Mensaje;
use Illuminate\Support\Facades\Auth;

class MensajeController extends Controller
{   
    protected $carrito;
    protected $mensaje;
  
       function __construct( Carrito $carrito, Mensaje $mensaje)
    {
        $this->carrito = $carrito;
        $this->mensaje = $mensaje;
    }
    public function index()
    {
       // return "deseable";
    }

   
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
       
        if (Auth::check()) {
            $valor=1;
            $id_usuario=Auth::id();

        
            //consulta para saber cual es el ultimo carrito de compra del usuario y con status 0 de disponible
            $buscar_carrito= $this->carrito
            ->where('usuario_id',  $id_usuario)
            ->where('status',  0)
            ->orderby('created_at','DESC')->take(1)->get();
            $contar=count($buscar_carrito);
            $mensaje="";
            if ($contar>0) {
                foreach ($buscar_carrito as $items2) {
                    $id_carrito=$items2->id;

                    $tipo=$request->opciones;
                    switch ($tipo) {
                        case '1':
                               // guardar el mensaje de cancion
                               $mensaje=$request->cancion;
                            break;
                        case '2':
                               $mensaje=$request->carta;
                            break;
                        case '3':
                               $mensaje=$request->poema;
                            break;   
                        default:
                               $mensaje="--";
                            break;
                    }
                   //guardar registro del mensaje
                    $this->mensaje->create([
                        'tipo' => $tipo,
                        'mensaje' =>  $mensaje,
                        'usuario_id' =>  $id_usuario,
                        'carrito_id' =>  $id_carrito
                    ]);
                    return back()->with('validar',$valor)->with('alert', 'Mensaje capturado con éxito!');

                } 
            }
            else{

            }      return back()->with('validar',$valor)->with('alert', 'Aún no has iniciado una compra, por favor, selecciona un producto');
        }
        else{
            $valor=0;
             return redirect('index')->with('validar',$valor)->with('alert', 'Inicia sesión para poder iniciar una compra!');
        }
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
