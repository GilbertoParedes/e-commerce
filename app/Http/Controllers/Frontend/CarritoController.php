<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Product;
use App\Carrito;
use App\CarritoProducto;
use App\ProductoCategoria;

use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
  	protected $user;
    protected $producto;
    protected $carrito;
    protected $carritoproducto;
    protected $productocategoria;

    // contructor de modelo para uso en cualquier método
    function __construct(User $user, Product $producto, Carrito $carrito, CarritoProducto $carritoproducto,ProductoCategoria $productocategoria)
    {
        $this->user = $user;
        $this->producto = $producto;
        $this->carrito = $carrito;
        $this->carritoproducto = $carritoproducto;
        $this->productocategoria = $productocategoria;
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
           

          //consulta para saber cual es el ultimo carrito de compra del usuario y con status 0 de disponible
            $buscar_carrito= $this->carrito
            ->where('usuario_id',  $id_usuario)
            ->where('status',  0)
            ->orderby('created_at','DESC')->take(1)->get();
            $contar=count($buscar_carrito);
            //si haya productos en el carrito
            if ($contar>0) {
                foreach ($buscar_carrito as $items2) {
                    $id_carrito_nuevo=$items2->id;
                    $id_carrito_compras=$id_carrito_nuevo;
                } 
                $productos_carrito= $this->carritoproducto
                        ->where('carrito_id', $id_carrito_compras)
                        ->get();

                return view('frontend.pages.carrito')
                ->with('validar',$valor)
                ->with('buscar_carrito',$buscar_carrito)
                ->with('productos_carrito',$productos_carrito)
                ->with('buscar_complemento',$buscar_complemento)
                ->with('products',$products);

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

  public function destroy($id_carrito_producto)
    {
     $share = CarritoProducto::find($id_carrito_producto);
     $share->delete();
     return redirect('/carritocompras')->with('success', 'El producto ha sido eliminado de tu carrito de compras');
    }
}