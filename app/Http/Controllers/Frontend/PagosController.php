<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductoCategoria;
use Illuminate\Support\Facades\Auth;
use Mail;
use Session;
use Redirect;
use App\Product;
use App\Category;
use App\Deseable;
use App\ComprarAhora;
use App\Carrito;
use App\CarritoProducto;
use App\Pago;
use App\Direction;
use App\User;
use App\Pagos;

class PagosController extends Controller
{
   protected $product;
   protected $cat;
   protected $deseable; 
   protected $comprarahora;
   protected $carrito;
   protected $pago;
   protected $carrito_producto;
   protected $user;
   protected $pagos;

    function __construct(Product $product, Category $cat, Deseable $deseable,ComprarAhora $comprarahora, Carrito $carrito,Pago $pago, Direction $direction,CarritoProducto $carrito_producto, User $user, Pagos $pagos)
   {
        $this->product = $product;
        $this->cat = $cat;
       
        $this->deseable=$deseable;
        $this->comprarahora=$comprarahora;
        $this->carrito=$carrito;
        $this->direction=$direction;
        $this->carrito_producto=$carrito_producto;
        $this->pago=$pago;
        $this->user=$user;
        $this->pagos=$pagos;

   }
    public function index()
    {
         if (Auth::check()) {
            $id_usuario=Auth::id();
            $valor=1;
          }
          else{
            $valor=0;
          }
             return view('frontend.pages.contactanos')->with('validar',$valor);
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

      if (Auth::check()) {
            $id_usuario=Auth::id();
            $valor=1;

           $fecha=$request->fecha;
           $hora=$request->hora;
           $id_comprar_ahora=$request->id_comprar_ahora;

           $fecha_hoy=date("Y-m-d"); 
     
           if ($fecha>$fecha_hoy) {
            
           
           //consulta para extraer id de la tabla pago
            $consulta_pago=$this->pago
                        ->where('comprar_ahora_id',  $id_comprar_ahora)  
                        ->get();
            foreach ($consulta_pago as $val) {
                $id_pago=$val->id;
            } 
                  
           //modificar fecha y hora de la tabla de pago

           $contatenar=array('fecha' => $fecha,  'hora'=>$hora);
           $carritoFinalizar = $this->pago->find($id_pago);
           $carritoFinalizar->update($contatenar);

           if ($carritoFinalizar->update()) {
              return back()->with('validar',$valor)->with('alert', 'Fecha y Hora registrada');
           }
           else{
             return redirect('index')->with('validar',$valor)->with('alert', 'Problema al guardar fecha y hora en el sistema');
           }
           }
           else{
              return back()->with('validar',$valor)->with('alert', 'La fecha de entrega debe ser superior a la fecha actual');
           }

       }
       else{
         $valor=0;
            return redirect('index')->with('validar',$valor)->with('alert', 'Inicia sesión para´poder realizar una compra!');
           
      }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($type_pay)
    {
        //extraer id de usuario actual
        if (Auth::check()) {
             $valor=1;
             //extraer id del usuario
             $id_usuario=Auth::id();

             //buscar carrito en proceso
             $carrito_proceso=$this->carrito
                    ->where('usuario_id',  $id_usuario)
                    ->where('status',  0)
                    ->orderby('created_at','DESC')->take(1)->get();

            $contar_carrito=count($carrito_proceso);
            
            foreach ($carrito_proceso as $value) {
              $id_carrito=$value->id;

              $BuscarComprarAhora=$this->comprarahora
              ->where('carrito_id',  $id_carrito)
              ->orderby('created_at','DESC')->take(1)->get();
              $contar_comprarAhora=count($BuscarComprarAhora);
             // dd($contar_comprarAhora);
              //extraer id_compra
             foreach ($BuscarComprarAhora as $value_compra) {
                 $id_comprar_ahora=$value_compra->id;
                //consulta para ver si ya existe registro de envio en la tabla pago
                  $buscar=$this->pago
                    ->where('comprar_ahora_id',  $id_comprar_ahora)
                    ->orderby('created_at','DESC')->take(1)->get();

                  $cant_pago=count($buscar);
                
                  if ($cant_pago>0) {
                        foreach ($buscar as $val_pago) {
                           $id_pago=$val_pago->id;

                          //modificar dato
                          $borrarenvio = Pago::find($id_pago);
                          $borrarenvio->delete();

                          $this->pago->create([
                            'type_pay' => $type_pay,
                            'comprar_ahora_id' =>  $id_comprar_ahora
                          ]);
                            return redirect('pago')
                         ->with('validar',$valor)->with('alert', 'Se ha modificado el tipo de envío ');
                        }

                  }
                  else{ //registrar en la tabla de pago
                    $this->pago->create([
                        'type_pay' => $type_pay,
                        'comprar_ahora_id' =>  $id_comprar_ahora
                    ]);
                    //buscar id del pago creado
                    $buscar_id_pago=$this->pago
                    ->where('comprar_ahora_id',  $id_comprar_ahora)
                    ->orderby('created_at','DESC')->take(1)->get();
                    foreach ($buscar_id_pago as $val_tipo_envio) {
                        $id_envio=$val_tipo_envio->id;
                         return redirect('pago')
                         ->with('validar',$valor)->with('alert', 'Estandar añadido con éxito');
                           //ultimo comprar ahora 
                          
                    }

                  }
                   
              }

            }
          
        }  
        else{
            $valor=0;
            return view('frontend.pages.index')->with('validar',$valor);
        }   
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
