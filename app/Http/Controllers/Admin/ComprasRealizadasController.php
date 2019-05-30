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
class ComprasRealizadasController extends Controller
{  protected $user;
   protected $carrito;
   protected $product;
   protected $carrito_producto;
   protected $transaccion;

    // contructor de modelo para uso en cualquier método
    function __construct(Product $product, Carrito $carrito, CarritoProducto $carrito_producto,User $user, Pagos $transaccion)
    {
        $this->product = $product;
        $this->carrito = $carrito;
        $this->carrito_producto=$carrito_producto;
        $this->user=$user;
        $this->transaccion=$transaccion;
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
