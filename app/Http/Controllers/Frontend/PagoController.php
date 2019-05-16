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

class PagoController extends Controller
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
        if (Auth::check()) {
            $valor=1;
            $id_usuario=Auth::id();
             return view('frontend.pages.pago')
                 ->with('validar',$valor); 

        }
        else{
            $valor=0;
            return redirect('index')
                 ->with('validar',$valor); 
        }
    }
}