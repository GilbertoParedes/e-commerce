<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\ProductoCategoria;
use App\Deseable;
use App\Carrito;
use App\CarritoProducto;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
   protected $product;
   protected $cat;
   protected $product_cat;
   protected $deseable; 
   protected $carrito;
   protected $carrito_producto;
   function __construct(Product $product, Category $cat, ProductoCategoria $product_cat, Deseable $deseable, Carrito $carrito, CarritoProducto $carrito_producto)
   {
        $this->product = $product;
        $this->cat = $cat;
        $this->product_cat=$product_cat;
        $this->deseable=$deseable;
        $this->carrito=$carrito;
        $this->carrito_producto=$carrito_producto;
   }

   public function index()
    {

    }
  
 	public function detalles()
    {
 		return view('frontend.pages.detalles');
    }

        public function show($id)
    {

        if (Auth::check()) {
             $valor=1;
             //extraer id del usuario
             $id_usuario=Auth::id();
        }
        else{
             $valor=0;
             $id_usuario=null;
        }
      //consulta para extraer la id del carrito
       $buscar_carrito= $this->carrito
            ->where('usuario_id',  $id_usuario)
            ->where('status',  0)
            ->get();
       $existe=count($buscar_carrito);
              //consulta en tabla productos
                 $deseable_buscar= $this->deseable
                      ->where('user_id',  $id_usuario)
                      ->get();    
              

                //consulta en tabla productos
                 $producto_detalle= $this->product
                      ->where('id',  $id)
                      ->get();

                 $detailsProduct=Product::find($id);
                 $type="";

                 //extraer tipo de detalles del producto
                 foreach ($producto_detalle as $value) {
                    $type=$value->type;
                 }
                 //productos relacionados
                 $product_relacionados= $this->product
                      ->where('type',  $type)
                      ->orderby('created_at','DESC')->take(4)->get();  

                //productos tipo globos
                 $type_globos= $this->product
                      ->where('type',  'Globo')
                      ->orderby('created_at','ASC')->take(3)->get();  
                //productos tipo chocolates
                 $type_chocolate= $this->product
                      ->where('type',  'Chocolate')
                      ->orderby('created_at','DESC')->take(3)->get();  
                
                //productos tipo peluche
                 $type_peluche= $this->product
                      ->where('type',  'Peluche')
                      ->orderby('created_at','DESC')->take(3)->get();  

      //consulta para saber cual es el ultimo carrito de compra del usuario y con status 0 de disponible
           if ($existe>0) {

                 foreach ($buscar_carrito as $items) {
                    $id_carrito= $items->id;
                    //consulta para extraer los carrito_producto
                        $buscar_carrito_producto= $this->carrito_producto
                        ->where('carrito_id',  $id_carrito)
                        ->get();
                 }
                  //Enviar datos

                  return view('frontend.pages.detalles')
                  ->with('validar',$valor)
                  ->with('product',$detailsProduct)
                  ->with('type_globos',$type_globos)
                  ->with('type_chocolate',$type_chocolate)
                  ->with('type_peluche',$type_peluche)
                  ->with('deseable_buscar',$deseable_buscar)
                  ->with('carrito',$existe)
                  ->with('product_relacionados',$product_relacionados)
                  ->with('buscar_carrito_producto',$buscar_carrito_producto)
                  ;
           }
           else{
                  //Enviar datos
                  return view('frontend.pages.detalles')
                  ->with('validar',$valor)
                  ->with('product',$detailsProduct)
                  ->with('type_globos',$type_globos)
                  ->with('type_chocolate',$type_chocolate)
                  ->with('type_peluche',$type_peluche)
                  ->with('deseable_buscar',$deseable_buscar)
                  ->with('carrito',$existe)
                  ->with('product_relacionados',$product_relacionados);
           }

    

      //   $productEdit=Product::find($id);
      //  return view('admin.product.edit')->with('product',$productEdit);
    }
}
