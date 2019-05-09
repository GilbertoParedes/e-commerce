<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\ProductoCategoria;
use App\Deseable;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
   protected $product;
   protected $cat;
   protected $product_cat;
   protected $deseable; 
   function __construct(Product $product, Category $cat, ProductoCategoria $product_cat, Deseable $deseable)
   {
        $this->product = $product;
        $this->cat = $cat;
        $this->product_cat=$product_cat;
        $this->deseable=$deseable;
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

    	//consulta en tabla productos
       $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
    	 $detailsProduct=Product::find($id);

      //productos tipo globos
       $type_globos= $this->product
            ->where('type',  'Globo')
            ->orderby('created_at','DESC')->take(3)->get();  

      //productos tipo chocolates
       $type_chocolate= $this->product
            ->where('type',  'Chocolate')
            ->orderby('created_at','DESC')->take(3)->get();  
      
      //productos tipo peluche
       $type_peluche= $this->product
            ->where('type',  'Peluche')
            ->orderby('created_at','DESC')->take(3)->get();  
                   
    	//Enviar datos
        return view('frontend.pages.detalles')
        ->with('validar',$valor)
        ->with('product',$detailsProduct)
        ->with('type_globos',$type_globos)
        ->with('type_chocolate',$type_chocolate)
        ->with('type_peluche',$type_peluche)
        ->with('deseable_buscar',$deseable_buscar);

      //   $productEdit=Product::find($id);
      //  return view('admin.product.edit')->with('product',$productEdit);
    }
}
