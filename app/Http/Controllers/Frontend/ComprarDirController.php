<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Direction;
use App\ComprarAhora;


class ComprarDirController extends Controller
{

    protected $direction;
    protected $comprarahora;

    // contructor de modelo para uso en cualquier método
    function __construct(Direction $direction,ComprarAhora $comprarahora)
    {
        $this->direction=$direction;
        $this->comprarahora=$comprarahora;

    }

    public function index()
    {
		if (Auth::check()) {
            $valor=1;
            //extraer id del usuario
            $id_usuario=Auth::id();

            //consulta para obtener direcciones del usuario
            $direcciones_user=$this->direction
            ->where('usuario_id',  $id_usuario)
            ->get();    
            
            $cantidad_Dir=count($direcciones_user);

            return view('frontend.pages.comprarahora_dir')
            ->with('dir',$direcciones_user)
            ->with('validar',$valor);
   
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
       //almacenar informacion en variables
       $id=$request->id_dir;
       $titular=$request->nombre;
       $facturar=$request->facturar;
       //buscar la id de carrito maxima donde el status este en activo
       $carrito_proceso=$this->carrito
            ->where('usuario_id',  $id_usuario)
            ->where('status',  0)
            ->get();    
        foreach ($carrito_proceso as $carr) {
            $carrito_id=$carr->id;
        
           //insertar datos a carrito de compras
           $this->comprarahora->create([
                'titular' => $titular,
                'facturacion' =>  $facturar,
                'carrito_id' =>  $carrito_id,
                'direccion_id' =>  $direccion_id
            ]);

           return view('frontend.pages.carrito_p2')
                ->with('validar',$valor)
                ;  
        }
       }
       else{
        $valor=0;
       }
    }   

    public function destroy( $id)
    {
       $id;
       dd($id);

    }

}
