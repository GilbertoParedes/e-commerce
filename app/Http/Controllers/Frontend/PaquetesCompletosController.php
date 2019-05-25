<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductoCategoria;
use Illuminate\Support\Facades\Auth;
use Mail;
use Session;
use Redirect;
use App\CarritoProducto;
use App\Carrito;
use App\Product;
use App\LetrasNumeros;

class PaquetesCompletosController extends Controller
{
    protected $producto;
    protected $carrito;
    protected $carritoproducto;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     // contructor de modelo para uso en cualquier método
    function __construct(Product $producto, Carrito $carrito, CarritoProducto $carritoproducto,letrasNumeros $letras_numeros, ProductoCategoria $producto_categoria)
    {
        $this->producto = $producto;
        $this->carrito = $carrito;
        $this->carritoproducto = $carritoproducto;
        $this->letras_numeros = $letras_numeros;
        $this->producto_categoria = $producto_categoria;

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
            if (empty($letras) || empty($numeros)) {
                 return redirect('letras_numeros')->with('validar',$valor)->with('alert', 'Recuerda que tienes que seleccionar 5 letras y 2 números');

            } else{


            $cantidad_letras=count($letras);
            $cantidad_numeros=count($numeros);
            
            //consulta para saber cual es el ultimo carrito de compra del usuario y con status 0 de disponible
            $buscar_carrito= $this->carrito
            ->where('usuario_id',  $id_usuario)
            ->where('status',  0)
            ->orderby('created_at','DESC')->take(1)->get();
            $contar=count($buscar_carrito);
          
            if ($cantidad_letras==5 && $cantidad_numeros==2) {
                $letras_concat=$letras[0].",".$letras[1].",".$letras[2].",".$letras[3].",".$letras[4];  
                $numeros_concat=$numeros[0].",".$numeros[1];
          
                    if ($contar>0) {
                       //si hay carrito  en proceso
                          //buscar nuevo carrito creado
                        $buscar_carrito_nuevo= $this->carrito
                        ->where('usuario_id',  $id_usuario)
                        ->where('status',  0)
                        ->orderby('created_at','DESC')->take(1)->get();
                        foreach ($buscar_carrito_nuevo as $value) {
                            $id_carrito=$value->id;
                          //  dd($id_carrito);

                        //seleccionar el id del producto desde la tabla de producto categoria
                        $buscar_producto_categoria= $this->producto_categoria
                        ->where('categoria_id',  20)
                        ->orderby('created_at','DESC')->take(1)->get();


                        foreach ($buscar_producto_categoria as $val) {
                            //extraer id_producto
                            $id_producto=$val->producto_id;

                            //crear registro de en la tabla de carrito producto
                           $this->carritoproducto->create([
                                'cantidad' =>  1,
                                'carrito_id'=>$id_carrito,
                                'producto_id' => $id_producto   
                           ]);

                           //extraer la id de la tabla carrito_producto recien creada
                           $buscar_carrito_producto= $this->carritoproducto
                               ->where('carrito_id',  $id_carrito)
                               ->where('producto_id',  $id_producto)
                                ->orderby('created_at','DESC')->take(1)->get();
                             
                             //extraer id_de carrito_producto registrada
                            foreach ($buscar_carrito_producto as $val_carrito_pro) {
                                $id_carrito_producto=$val_carrito_pro->id;

                            $this->letras_numeros->create([
                                    'letras' =>  $letras_concat,
                                    'numeros'=>$numeros_concat,
                                    'usuario_id' => $id_usuario,
                                    'carrito_producto_id' => $id_carrito_producto,
                                    'carrito_id' => $id_carrito
                             ]);
                                return redirect('letras_numeros')->with('validar',$valor)->with('alert', 'Producto Registrado Con éxito');

                                //crear registro en la tabla de letras_numeros
                            }
                        }
                        }
                    }
                    else{
                        //no ay carrito con status, crear registro
                         $this->carrito->create([
                                'fecha_inicio' =>  NOW(),
                                'status'=>0,
                                'usuario_id' => $id_usuario
                         ]);
                         //buscar nuevo carrito creado
                        $buscar_carrito_nuevo= $this->carrito
                        ->where('usuario_id',  $id_usuario)
                        ->where('status',  0)
                        ->orderby('created_at','DESC')->take(1)->get();
                        foreach ($buscar_carrito_nuevo as $value) {
                            $id_carrito=$value->id;
                          //  dd($id_carrito);

                        //seleccionar el id del producto desde la tabla de producto categoria
                        $buscar_producto_categoria= $this->producto_categoria
                        ->where('categoria_id',  20)
                        ->orderby('created_at','DESC')->take(1)->get();


                        foreach ($buscar_producto_categoria as $val) {
                            //extraer id_producto
                            $id_producto=$val->producto_id;

                            //crear registro de en la tabla de carrito producto
                           $this->carritoproducto->create([
                                'cantidad' =>  1,
                                'carrito_id'=>$id_carrito,
                                'producto_id' => $id_producto   
                           ]);

                           //extraer la id de la tabla carrito_producto recien creada
                           $buscar_carrito_producto= $this->carritoproducto
                               ->where('carrito_id',  $id_carrito)
                               ->where('producto_id',  $id_producto)
                                ->orderby('created_at','DESC')->take(1)->get();
                             
                             //extraer id_de carrito_producto registrada
                            foreach ($buscar_carrito_producto as $val_carrito_pro) {
                                $id_carrito_producto=$val_carrito_pro->id;

                            $this->letras_numeros->create([
                                    'letras' =>  $letras_concat,
                                    'numeros'=>$numeros_concat,
                                    'usuario_id' => $id_usuario,
                                    'carrito_producto_id' => $id_carrito_producto,
                                    'carrito_id' => $id_carrito
                             ]);
                               
                              return redirect('letras_numeros')->with('validar',$valor)->with('alert', 'Producto Registrado Con éxito');

                                //crear registro en la tabla de letras_numeros
                            }
                        }
                        }

                    }
                
            }
            else{
                   return redirect('letras_numeros')->with('validar',$valor)->with('alert', 'Recuerda que tienes que elegir 5 letras y 2 números');
            }
    }
}
    else{
     $valor=1;
      return redirect('index')->with('validar',$valor)->with('alert', 'Inicia sesión para poder realizar una compra!');
    }



          /*  else{
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
            }*/
          
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
