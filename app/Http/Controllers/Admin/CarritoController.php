<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Carrito;
use App\Product;
use App\CarritoProducto;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
   protected $carrito;
   protected $product;
   protected $carrito_producto;

    // contructor de modelo para uso en cualquier método
    function __construct(Product $product, Carrito $carrito, CarritoProducto $carrito_producto)
    {
        $this->product = $product;
        $this->carrito = $carrito;
        $this->carrito_producto=$carrito_producto;
    }
    public function index()
    {
        //return "hola desde el carrito";
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
    $valor=1;
    //extraer id del usuario
    $id_usuario=Auth::id();
    $id_producto=$request->id_producto; 
    //obtener id_usuario
    //conversion de la id del producto a entero
    $id_prod=(int)$id_producto;
  
       //consulta a tabla carrito para obtener registro de usuario y verificar si el status esta en proceso
        $buscar_carrito= $this->carrito->where('usuario_id',  $id_usuario)->orderby('created_at','DESC')->take(1)->get();
        //contar cuantos registros tiene el usuario
        $contar_carrito=count($buscar_carrito);
       //si tiene mas de 0 significa que ya ha realizado alguna compra anteriormente entonces hacer un foreach y obtener status y fecha de inicio 
        
        /***********************************PRIMER IF***********************************************/
        if ($contar_carrito>0) {
           foreach ($buscar_carrito as $items) {
              $id_carrito= $items->id;
              $status=$items->status;
                if ($status==0) {
                    
                    $buscar_carrito_producto= $this->carrito_producto
                    ->where('carrito_id',  $id_carrito) 
                    ->where('producto_id',  $id_prod) 
                    ->get();
                    $contar_registros_carrito_productos=count($buscar_carrito_producto);
                     $contar_registros_carrito_productos;
                    if ($contar_registros_carrito_productos==0) {
                        //aun no esta registrado 
                            $this->carrito_producto->create([
                                'cantidad' =>1,
                                'carrito_id' => $id_carrito,
                                'producto_id' => $id_producto
                            ]);
                     }
                     else{
                           return redirect()->back() ->with('alert', 'El producto ya habia sido añadido al carrito de compras');
                     }
                }
                else{
                    echo "carrito finalizado";
                     $this->carrito->create([
                          'fecha_inicio' => NOW(),
                          'fecha_fin' => null,
                          'status' => 0, 
                          'usuario_id' =>$id_usuario   
                     ]); 
                     echo "se creó un nuevo carrito";
                     
                     $buscar_carrito2= $this->carrito->where('usuario_id',  $id_usuario)->orderby('created_at','DESC')->take(1)->get();
                     foreach ($buscar_carrito2 as $items2) {
                           $id_carrito_nuevo=$items2->id;
                           //crear registro del producto
                           $this->carrito_producto->create([
                               'cantidad' =>1,
                               'carrito_id' => $id_carrito_nuevo,
                               'producto_id' => $id_prod
                           ]);
                           return redirect()->back() ->with('alert', 'Producto registrado con éxito');

                     }

                }
            }
             return redirect()->back() ->with('alert', 'Producto registrado con éxito');
        }
        /*************************************FIN PRIMER IF******************************/
        
        /*************************************PRIMER ELSE******************************/
        else{
                    $this->carrito->create([
                          'fecha_inicio' => NOW(),
                          'fecha_fin' => null,
                          'status' => 0, 
                          'usuario_id' =>$id_usuario   
                    ]); 
                    echo "se creó un nuevo carrito";
                     
                    $buscar_carrito2= $this->carrito->where('usuario_id',  $id_usuario)->orderby('created_at','DESC')->take(1)->get();
                    foreach ($buscar_carrito2 as $items2) {
                           $id_carrito_nuevo=$items2->id;
                           //crear registro del producto
                           $this->carrito_producto->create([
                               'cantidad' =>1,
                               'carrito_id' => $id_carrito_nuevo,
                               'producto_id' => $id_prod
                           ]);
                           return redirect()->back() ->with('alert', 'Producto registrado con éxito');
                    }
        }
        /*************************************FIN PRIMER IF******************************/
    }
    else{
        $valor=0;
        return redirect()->back()->with('validar',$valor)->with('alert', 'Inicia sesión para poder realizar una compra!');

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

      if (Auth::check()) {
        $valor=1;
        //extraer id del usuario
        $id_usuario=Auth::id();
         $carritoProducto=CarritoProducto::find($id);
         foreach ($carritoProducto as $value) {
            $cantidad=$value->cantidad;
            $producto_id=$value->producto_id;
          
            //consulta para obtener informacion del producto
            $buscar_producto= $this->product->where('id',  $producto_id)->get();
            foreach ($buscar_producto as $val_producto) {
                  $path=$val_producto->path;
                  $nombre=$val_producto->name;
                  $descripcion=$val_producto->description;

                  return view('frontend.pages.edit_carrito')
                   ->with('id_producto',$id)
                   ->with('cantidad',$cantidad)
                   ->with('path',$path)
                   ->with('nombre',$nombre)
                   ->with('descripcion',$descripcion)
                   ->with('validar',$valor);
            }
         }
        

         
     }
     else{
      $valor=0;
      return redirect('index')->with('validar',$valor);
     }
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
     

      $productoModificar = CarritoProducto::find($id);
      $productoModificar->update($request->all());
      

      return redirect('/carritocompras')->with('success', 'El producto ha sido actualizada con éxito');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::check()) {
        $valor=1;
        //extraer id del usuario
        $id_usuario=Auth::id();
         $carritoProducto=$this->carrito_producto->where('id',  $id)->get();
         foreach ($carritoProducto as $value) {
            $cantid=$value->cantidad;
            $producto_id=$value->producto_id;
          
            //consulta para obtener informacion del producto
            $buscar_producto= $this->product->where('id',  $producto_id)->get();
            foreach ($buscar_producto as $val_producto) {
                  $path=$val_producto->path;
                  $nombre=$val_producto->name;
                  $descripcion=$val_producto->description;
                  $precio=$val_producto->price;
                  return view('frontend.pages.edit_carrito')
                   ->with('id_producto',$id)
                   ->with('cantidad',$cantid)
                   ->with('path',$path)
                   ->with('nombre',$nombre)
                   ->with('descripcion',$descripcion)
                   ->with('precio',$precio)
                   ->with('validar',$valor);
            }
         }
        

         
     }
     else{
      $valor=0;
      return redirect('index')->with('validar',$valor);
     }
    }
}
