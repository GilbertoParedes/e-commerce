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

class FavoriteController extends Controller
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

             //extraer id del usuario
             $id_usuario=Auth::id();

             //extraer la id del usuario
              $status=1;
              $cantidad_favoritos=0;
              $cantidad=0;
              //consulta de productos
              $productos = $this->product->all();
                //consulta para buscar los productos que están añadidos por el usuario en favoritos
              $favoritos= $this->deseable->where('user_id',  $id_usuario)->get();
              $cantidad=count($favoritos);
              $cantidad_favoritos=$cantidad_favoritos+$cantidad;
              $prod_cat= $this->product_cat->where('categoria_id',  23)->get();
              $can=count($prod_cat);

              if ($can==0) {
                dd('Ingresa productos de categoria complemento');
              }
              else{
              //retorna favoritos
                return view('frontend.pages.favoritos')
               ->with('validar',$valor)
               ->with('favoritos',$favoritos)
               ->with('productos',$productos)
               ->with('cantidad_favoritos',$cantidad_favoritos)
               ->with('prod_cat',$prod_cat);
              }
              
        }
        else{
             $valor=0;
               return redirect('index')->with('validar',$valor)->with('alert', 'Inicia sesión para poder visualizar tus productos favoritos!');
            }
    }
  
 	public function detalles()
    {
 		return view('frontend.pages.detalles');
    }

        public function show($id_favorito)
    {
	     $share = Deseable::find($id_favorito);
	     $share->delete();
	     return back();
    }

    public function destroy($id_favorito)
    {     
     $share = Deseable::find($id_favorito);
     $share->delete();
 
 	 return view('frontend.pages.index');
    }
}
