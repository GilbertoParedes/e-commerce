<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Product;
use App\Carrito;
use App\CarritoProducto;
use App\ProductoCategoria;
use App\Direction;
use App\Deseable;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
  	protected $user;
    protected $producto;
    protected $carrito;
    protected $carritoproducto;
    protected $productocategoria;
    protected $direction;
    protected $deseable;
    // contructor de modelo para uso en cualquier método
    function __construct(User $user, Product $producto, Carrito $carrito, CarritoProducto $carritoproducto,ProductoCategoria $productocategoria,Direction $direction, Deseable $deseable)
    {
        $this->user = $user;
        $this->producto = $producto;
        $this->carrito = $carrito;
        $this->carritoproducto = $carritoproducto;
        $this->productocategoria = $productocategoria;
        $this->direction=$direction;
        $this->deseable=$deseable;

    }

    public function index()
    {
     if (Auth::check()) {
         $valor=1;
         //extraer id del usuario
         $id_usuario=Auth::id();
         $products = $this->producto->all();
         $id_carrito_compras=0;
 
          //BUSCAR 4 PRODUCTOS DE TIPO COMPLEMENTOS
          $buscar_complemento= $this->productocategoria->where('categoria_id',  23)->orderby('created_at','DESC')->take(4)->get();
           
          //buscar productos añadidos a favoritos por el usuario
            $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
          //consulta para saber cual es el ultimo carrito de compra del usuario y con status 0 de disponible
            $buscar_carrito= $this->carrito
            ->where('usuario_id',  $id_usuario)
            ->where('status',  0)
            ->orderby('created_at','DESC')->take(1)->get();
            $contar=count($buscar_carrito);

            $direcciones_user=$this->direction
            ->where('usuario_id',  $id_usuario)
            ->get();    
            
            $cantidad_Dir=count($direcciones_user);


            //si haya productos en el carrito
            if ($contar>0) {
                foreach ($buscar_carrito as $items2) {
                    $id_carrito_nuevo=$items2->id;
                    $id_carrito_compras=$id_carrito_nuevo;
                } 
                $productos_carrito= $this->carritoproducto
                        ->where('carrito_id', $id_carrito_compras)
                        ->get();
              
                //extraer correo electronico   
                 $correo_user=$this->user
                ->where('id',  $id_usuario)
                ->get();  
                foreach ($correo_user as $value) {
                    $email=$value->email;
                }
                return view('frontend.pages.carrito')
                ->with('validar',$valor)
                ->with('buscar_carrito',$buscar_carrito)
                ->with('productos_carrito',$productos_carrito)
                ->with('buscar_complemento',$buscar_complemento)
                ->with('products',$products)
                ->with('cantidad_Dir',$cantidad_Dir)
                ->with('deseable_buscar',$deseable_buscar)
              ;     







            }
            else{
                return redirect('index')->with('validar',$valor)->with('alert', 'Aún no tienes productos en tu carrito!');
            }   


         $usuarios =$this->user->where('id',  $id_usuario)->get();
         return view('frontend.pages.count')->with('validar',$valor)->with('usuarios',$usuarios);
     }
     else{
        $valor=0;
        return redirect('index')->with('validar',$valor)->with('alert', 'Inicia sesión para poder realizar una compra!');
     }

    }
    public function store(Request $request){
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
        
            $direcciones_user=$this->direction
            ->where('usuario_id',  $id_usuario)
            ->get();    
            
            $cantidad_Dir=count($direcciones_user);



        /***********************************PRIMER IF***********************************************/
        if ($contar_carrito>0) {
           foreach ($buscar_carrito as $items) {
              $id_carrito= $items->id;
              $status=$items->status;
                if ($status==0) {
                    
                    $buscar_carrito_producto= $this->carritoproducto
                    ->where('carrito_id',  $id_carrito) 
                    ->where('producto_id',  $id_prod) 
                    ->get();
                    $contar_registros_carrito_productos=count($buscar_carrito_producto);
                     $contar_registros_carrito_productos;
                    if ($contar_registros_carrito_productos==0) {
                        //aun no esta registrado 
                            $this->carritoproducto->create([
                                'cantidad' =>1,
                                'carrito_id' => $id_carrito,
                                'producto_id' => $id_producto
                            ]);
                     }
                     else{

                        if ($cantidad_Dir>0) {
                             return redirect('comprar_parte_1') ->with('alert', 'Finaliza tu compra!');
                        }
                        else{
                             return redirect('comprar') ->with('alert', 'Finaliza tu compra!');
                        }
                      
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
                           $this->carritoproducto->create([
                               'cantidad' =>1,
                               'carrito_id' => $id_carrito_nuevo,
                               'producto_id' => $id_prod
                           ]);
                            return redirect('comprar') ->with('alert', 'Finaliza tu compra!');
                     }

                }
            }
             return redirect('comprar') ->with('alert', 'Finaliza tu compra!');
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
                           $this->carritoproducto->create([
                               'cantidad' =>1,
                               'carrito_id' => $id_carrito_nuevo,
                               'producto_id' => $id_prod
                           ]);
                          return redirect('comprar') ->with('alert', 'Finaliza tu compra!');
                    }
        }
        /*************************************FIN PRIMER IF******************************/
    }
    else{

        $valor=0;
        return redirect()->back()->with('validar',$valor)->with('alert', 'Inicia sesión para poder realizar una compra!');

    }

    }
  public function destroy($id_carrito_producto)
    {
     $share = CarritoProducto::find($id_carrito_producto);
     $share->delete();
     return redirect('/carritocompras')->with('success', 'El producto ha sido eliminado de tu carrito de compras');
    }
}