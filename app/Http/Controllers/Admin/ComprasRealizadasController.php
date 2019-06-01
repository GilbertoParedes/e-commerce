<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Carrito;
use App\Product;
use App\CarritoProducto;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Pagos;
use App\Pago;
use App\ProductoCategoria;
use App\LetrasNumeros;
use App\ComprarAhora;
use App\Direction;
use App\Mensaje;
class ComprasRealizadasController extends Controller
{  protected $user;
   protected $direccion;
   protected $carrito;
   protected $product;
   protected $carrito_producto;
   protected $transaccion;
   protected $producto_categoria;
   protected $letras_numeros;
   protected $comprar_ahora;
   protected $pago;
   protected $mensaje;
    // contructor de modelo para uso en cualquier método
    function __construct(Product $product, Carrito $carrito, CarritoProducto $carrito_producto,User $user, Pagos $transaccion,ProductoCategoria $producto_categoria,LetrasNumeros $letras_numeros, ComprarAhora  $comprar_ahora, Direction $direccion, Pago $pago,Mensaje $mensaje)
    {
        $this->product = $product;
        $this->carrito = $carrito;
        $this->carrito_producto=$carrito_producto;
        $this->user=$user;
        $this->transaccion=$transaccion;
        $this->producto_categoria=$producto_categoria;
        $this->letras_numeros=$letras_numeros;
        $this->comprar_ahora=$comprar_ahora;
        $this->direccion=$direccion;
        $this->pago=$pago;
        $this->mensaje=$mensaje;
    }
    public function index()
    {
        if (Auth::check()) {
                    $valor=1;
                    $id_transaction="";
                    //extraccion de id de usuario que inició  sesión
                    $id_usuario=Auth::id();
                    //consulta de autenticacion
                    $autenticar_user= $this->user->where('id',  $id_usuario)->get();

                    //extraer tipo de usuario
                    foreach ($autenticar_user as $values) {
                      $type_user=$values->type_user;
                    //buscar todos los usuarios
                      $usuarios= $this->user->all();

                      //buscar datos de transaccion realizada por el usuario
                      $buscar_transaccion= $this->transaccion->all();

                        if ($type_user=="Admin") {

                           $carrito_pedidos=$this->carrito
                                ->where('status',  1)
                                ->orderby('created_at','DESC')->get();

                            return view('admin.pedidos.index')
                            ->with('carrito_pedidos',$carrito_pedidos)
                          
                            ->with('usuarios',$usuarios)

                            ->with('buscar_transaccion',$buscar_transaccion)
                            ;

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
        //
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
     
         if (Auth::check()) {
                    $valor=1;
                    $id_usuario=Auth::id();
                    $id_usuario_cliente="";
                    //consulta de autenticacion
                    $autenticar_user= $this->user->where('id',  $id_usuario)->get();

                    //extraer tipo de usuario
                    foreach ($autenticar_user as $values) {
                      $type_user=$values->type_user;
                       if ($type_user=="Admin") {

                            //datos del carrito
                             $carrito_pedidos=$this->carrito
                                ->where('id',  $id)
                                ->get();

                             //extraer id del cliente       
                             foreach ($carrito_pedidos as $value) {
                                  $id_usuario_cliente=$value->usuario_id;
                                  $fecha_fin=$value->fecha_fin;
                             }

                             //datos del usuario
                             $usuario_datos=$this->user
                                ->where('id',  $id_usuario_cliente)
                                ->get();

                                
                            //carrito productos
                            $carrito_produc=$this->carrito_producto
                                ->where('carrito_id',  $id)
                                ->get();

                            //pago
                               //datos del usuario
                             $datos_pago=$this->transaccion
                                ->where('carrito_id',  $id)
                                ->get();    

                              foreach ($datos_pago as $val_transaccion) {
                                     $id_transaccion=$val_transaccion->id;
                                     $status_transaccion=$val_transaccion->status;
                                     $idtransaction=$val_transaccion->idtransaction;

                                }  
                            //productos
                             $productos= $this->product->all();

                             #producto paquetes completos
                              $paquetes_completos=$this->producto_categoria
                                ->where('categoria_id',  20)
                                ->get();    

                             #producto de letras
                              $letras_numeros_paquete=$this->letras_numeros
                                ->where('carrito_id',  $id)
                                ->get();  

                            //ver envio donde el carrito sea $id
                            $comprar_ahora_consulta=$this->comprar_ahora
                                ->where('carrito_id',  $id)
                                ->get();    
                            $direccion_id="";    
                            //extraer direccion    de la consulta
                            foreach ($comprar_ahora_consulta as $envio_val) {
                                    $id_envio=$envio_val->id;
                                    $titular_envio=$envio_val->titular;
                                    $facturacion=$envio_val->facturacion;
                                    $direccion_id=$envio_val->direccion_id;
                               }   
                            //consulta para ver datos de la direccion
                            $direccion_compra=$this->direccion
                                ->where('id',  $direccion_id)
                                ->get();
                            //tipo de envio
                            $envio=$this->pago
                                ->where('comprar_ahora_id',  $id_envio)
                                ->get(); 
                            foreach ($envio as $val_envio) {
                                   $type_pay=$val_envio->type_pay;
                                }    
                                
                             //consulta para extraer mensaje;
                               //consulta para ver datos de la direccion
                                $txt_mensaje="";
                            $mensaje_compra=$this->mensaje
                                 ->where('carrito_id',  $id) 
                                 ->orderby('created_at','DESC')->take(1)->get();
                                 $mensajes_cantidad=count($mensaje_compra);
                                if ($mensajes_cantidad>0) {
                                    foreach ($mensaje_compra as $val_txt) {
                                       $txt_mensaje=$val_txt->mensaje;
                                       $tipo=$val_txt->tipo;
                                    }   
                                }
                                else{
                                    $tipo="--";
                                    $txt_mensaje="NO HAY MENSAJE";
                                }
                            return view('admin.pedidos.detalles')
                            ->with('carrito_pedidos',$carrito_pedidos)
                            ->with('fecha_fin',$fecha_fin)
                            ->with('usuario_datos',$usuario_datos)
                            ->with('carrito_produc',$carrito_produc)
                            ->with('idtransaction',$idtransaction)
                            ->with('status_transaccion',$status_transaccion)
                            ->with('productos',$productos)
                            ->with('letras_numeros_paquete',$letras_numeros_paquete)
                            ->with('paquetes_completos',$paquetes_completos)
                            ->with('id_carrito',$id)
                            ->with('facturacion',$facturacion)
                            ->with('titular_envio',$titular_envio)
                            ->with('direccion_compra',$direccion_compra)
                            ->with('type_pay',$type_pay)
                            ->with('txt_mensaje',$txt_mensaje)
                            ->with('tipo',$tipo)

                            ;

                       }
                       else{

                       }
                    }
         }
         else{

         }
                    return view('admin.pedidos.index')->with('validar',$valor);
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
