<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Direction;
use App\ComprarAhora;
use App\Carrito;
use App\Pago;
use App\Http\Requests\DirComprarRequest;

class ComprarDirController extends Controller
{

    protected $direction;
    protected $comprarahora;
    protected $carrito;

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
     public function store(DirComprarRequest $request)
    {
       if (Auth::check()) {
       $valor=1;
         //extraer id del usuario
       $id_usuario=Auth::id();
        // Retrieve the validated input data...
       $validated = $request->validated();
       //almacenar informacion en variables
       $id_direccion=$request->id_dir;
       $titular=$request->nombre;
       $facturar=$request->facturar;
       //buscar la id de carrito maxima donde el status este en activo
       $carrito_proceso=$this->carrito
            ->where('usuario_id',  $id_usuario)
            ->where('status',  0)
            ->get();    
       $cuenta=count($carrito_proceso);  
     
        foreach ($carrito_proceso as $carr) {
            $carrito_id=$carr->id;
        
           //insertar datos a carrito de compras
           $this->comprarahora->create([
                'titular' => $titular,
                'facturacion' =>  $facturar,
                'carrito_id' =>  $carrito_id,
                'direccion_id' =>  $id_direccion
            ]);
            $BuscarComprarAhora=$this->comprarahora
                    ->where('carrito_id',  $carrito_id)
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
       else{
        $valor=0;
        return view('frontend.pages.index')
                ->with('validar',$valor);  
       }
    }   
    
    public function destroy( $id)
    {
       $id;
       dd($id);

    }
    
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->somethingElseIsInvalid()) {
                $validator->errors()->add('field', 'Something is wrong with this field!');
            }
        });
    }
}
