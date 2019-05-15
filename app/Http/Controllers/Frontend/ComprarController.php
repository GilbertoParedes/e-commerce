<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Direction;
use App\ComprarAhora;
use App\Carrito;

class ComprarController extends Controller
{
    protected $direction;
    protected $comprarahora;
    protected $carrito;

    // contructor de modelo para uso en cualquier método
    function __construct(Direction $direction,ComprarAhora $comprarahora, Carrito $carrito)
    {
        $this->direction=$direction;
        $this->comprarahora=$comprarahora;
        $this->carrito=$carrito;

    }
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
    public function store(Request $request)
    {
       if (Auth::check()) {
       $valor=1;
         //extraer id del usuario
       $id_usuario=Auth::id();
       //

       $titular=$request->nombre;
       $facturar=$request->facturar;
       //almacenar datos en la tabla de direcion
        $estado=$request->estado;
        $municipio=$request->municipio;
        $calle=$request->calle;
        $colonia=$request->colonia;
        $cp=$request->cp;
        $telefono=$request->tel;
        $numero=$request->numero;
        $tipo_direccion=$request->type_dir;
        $calle_a=$request->calle_a;
        $calle_b=$request->calle_b;
        $referencia=$request->referencia;

        $pais='Mexico';
        $this->direction->create([
            'pais' => $pais,
            'estado' => $estado,
            'municipio' => $municipio,
            'calle' => $calle,
            'colonia' => $colonia,
            'cp' => $cp,
            'telefono' => $telefono,
            'numero' => $numero,
            'tipo_direccion' => $tipo_direccion,
            'calle_a' => $calle_a,
            'calle_b' => $calle_b,
            'referencia' => $referencia,
            'usuario_id' => $id_usuario
        ]);
       //extraer id de dirección
       $Buscar_id_direction=$this->direction
            ->where('usuario_id',  $id_usuario)
            ->orderby('created_at','DESC')->take(1)->get();
       //extraer informacion de direccion
      foreach ($Buscar_id_direction as $dir) {
                $pk_direccion=$dir->id;

                //extraer id_carrito de la tabla de carrito de compra donde el status este en espera y sea del usuario
                  $carrito_proceso=$this->carrito
                    ->where('usuario_id',  $id_usuario)
                    ->where('status',  0)
                    ->orderby('created_at','DESC')->take(1)->get();

                    //extaer info
                    foreach ($carrito_proceso as $carr) {
                    $pk_carrito=$carr->id;
                    

                    //guardar registro en comprar ahora
                    $this->comprarahora->create([
                        'titular' => $titular,
                        'facturacion' =>  $facturar,
                        'carrito_id' =>  $pk_carrito,
                        'direccion_id' =>  $pk_direccion
                    ]);
                    //mandar al paso dos
                     return view('frontend.pages.pago')->with('validar',$valor);  
                    }
            }     
      

       //crear registro en tabla comprar_ahora


       }
       else{
       $valor=0;
        return view('frontend.pages.index')->with('validar',$valor);  
       }
    }
 
}
