<?php

namespace App\Http\Controllers\Frontend;
use Closure;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Category;
use App\ProductoCategoria;
use App\Deseable;
class PagesController extends Controller
{
    protected $product;
    protected $category;
    protected $deseable;

    function __construct(Product $product, Category $category, ProductoCategoria $productocategoria,Deseable $deseable)
    {
        $this->product = $product;
        $this->category = $category;
        $this->productocategoria = $productocategoria;
        $this->deseable = $deseable;

    }
    public function index()
    {
        if (Auth::check()) {
            $valor=1;
            $id_usuario=Auth::id();

        }
        else{
            $valor=0;
        }
        //consulta para extraer datos del producto

         return view('frontend.pages.index')->with('validar',$valor);
    }
 	
 	public function lomasvendido()
    {  
        if (Auth::check()) {
            $valor=1;
            $id_usuario=Auth::id();

        }
        else{
            $valor=0;
            $id_usuario=0;

        }
  
        $categorias = $this->category->where('type',  'Arreglo')->get();
        
        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
        $productos = $this->product->where('type',  'Arreglo')->get();
        $productos_globos = $this->product->where('type',  'Globo')->get();


 		return view('frontend.pages.lomasvendido')
        ->with('validar',$valor)
        ->with('deseable_buscar',$deseable_buscar)
        ->with('productos_globos',$productos_globos)
        ->with('productos',$productos);
     }

    public function paquetescompletos()
    { 
        if (Auth::check()) {
            $valor=1;
        }
        else{
            $valor=0;
        }
         return view('frontend.pages.paquetescompletos')->with('validar',$valor);
    }
       public function contactanos()
    {
       if (Auth::check()) {
            $valor=1;
        }
        else{
            $valor=0;
        }
         return view('frontend.pages.contactanos')->with('validar',$valor);
    }
    public function visitaprimeravez(){
        if (Auth::check()) {
            $valor=1;
        }
        else{
            $valor=0;
        }
         return view('frontend.pages.visitaporprimeravez')->with('validar',$valor);

    }
}
