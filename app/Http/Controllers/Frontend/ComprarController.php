<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Direction;
use App\ComprarAhora;
use App\Carrito;
use App\Pago;
use App\Http\Requests\ComprarRequest;
class ComprarController extends Controller
{
    protected $direction;
    protected $comprarahora;
    protected $carrito;
    protected $pago;

    // contructor de modelo para uso en cualquier método
    function __construct(Direction $direction,ComprarAhora $comprarahora, Carrito $carrito, Pago $pago)
    {
        $this->direction=$direction;
        $this->comprarahora=$comprarahora;
        $this->carrito=$carrito;
        $this->pago=$pago;
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
    public function store(ComprarRequest $request)
    {
       if (Auth::check()) {
       $valor=1;
         //extraer id del usuario
       $id_usuario=Auth::id();
       //
       $validated = $request->validated();
       $titular=$request->nombre;
       $facturar=$request->facturar;
       //almacenar datos en la tabla de direcion
        $estado=$request->estado;
        $municipio=$request->municipio;
        $calle=$request->calle;
        $colonia=$request->colonia;
        $cp=$request->cp;
        $telefono=$request->telefono;
        $numero=$request->numero;
        $tipo_direccion=$request->tipo_direccion;
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
                    
                    $BuscarComprarAhora=$this->comprarahora
                    ->where('carrito_id',  $pk_carrito)
                    ->orderby('created_at','DESC')->take(1)->get();
                    
                    foreach ($BuscarComprarAhora as $value_compra) {
                        $id_comprar_ahora=$value_compra->id;

                         $BuscarTarjeta=$this->pago
                         ->where('comprar_ahora_id',  $id_comprar_ahora)
                         ->orderby('created_at','DESC')->take(1)->get();

                         //contar registros de tarjetas
                         $contar_Tarjetas=count($BuscarTarjeta);
                                
                         return redirect('pago')
                                ->with('validar',$valor)
                                ->with('tarjetas',$contar_Tarjetas);  
                   }
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
