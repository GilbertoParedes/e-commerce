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
use Illuminate\Support\Facades\Auth;

class ComplementosController extends Controller
{
  	protected $user;
    protected $producto;
    protected $carrito;
    protected $carrito_producto;
    protected $productocategoria;
    protected $direction;

    // contructor de modelo para uso en cualquier método
    function __construct(User $user, Product $producto, Carrito $carrito, CarritoProducto $carrito_producto,ProductoCategoria $productocategoria,Direction $direction)
    {
        $this->user = $user;
        $this->producto = $producto;
        $this->carrito = $carrito;
        $this->carrito_producto = $carrito_producto;
        $this->productocategoria = $productocategoria;
        $this->direction=$direction;
    }

    public function index()
    {
    
    }

    public function store(Request $request){
          //extraer id usuario
          //extraer id_carrito

          $id_carrito_producto=$request->id_carrito_producto;
        
          $id = (int)$id_carrito_producto;
          $share = CarritoProducto::find($id);
          $share->delete();
          return back()->with('success', 'Complemento eliminado de carrito');
    }

  public function destroy($id_carrito_producto)
    {
  
    }
}