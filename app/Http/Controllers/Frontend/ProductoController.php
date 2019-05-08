<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\ProductoCategoria;

class ProductoController extends Controller
{
   protected $product;
   protected $cat;
   protected $product_cat;
    
   function __construct(Product $product, Category $cat, ProductoCategoria $product_cat)
   {
        $this->product = $product;
        $this->cat = $cat;
        $this->product_cat=$product_cat;
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
    	//consulta en tabla productos

    	 $detailsProduct=Product::find($id);
    	//Enviar datos
        return view('frontend.pages.detalles')->with('product',$detailsProduct);

      //   $productEdit=Product::find($id);
      //  return view('admin.product.edit')->with('product',$productEdit);
    }
}
