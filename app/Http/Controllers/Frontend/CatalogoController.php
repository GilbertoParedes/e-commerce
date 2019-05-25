<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use App\ProductoCategoria;
use App\Deseable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CatalogoController extends Controller
{
    
    protected $category;
    protected $product;
    protected $product_category;
    protected $deseable;
      function __construct( Category $category, Product $product, ProductoCategoria $product_category,Deseable $deseable)
    {
        $this->category = $category;
        $this->product = $product;
        $this->product_category = $product_category;
        $this->deseable=$deseable;
    }
    public function index()
    {
         return view('frontend.pages.catalogo');
    }
        public function menores()
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

        //categoria arreglo 
        $type="Arreglo";
     
        $productos= $this->product
            ->where('type',  $type)
            ->get();
        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.arreglos_menores')
         ->with('validar',$valor)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);

    }
 	public function catalogo_cumpleanos()
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

        //categoria arreglo de cumpleaños
        $id_cat=1;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.catalogo')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);

    }
    public function catalogo_aniversario()
    {
        //categoria arreglo de aniversario
        if (Auth::check()) {
             $valor=1;
             //extraer id del usuario
             $id_usuario=Auth::id();
        }
        else{
             $valor=0;
             $id_usuario=null;
        }

        //categoria arreglo de cumpleaños
        $id_cat=2;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.catalogo')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);
    }
  

    public function catalogo_compromisos_bodas()
    {
        //categoria arreglo de cumpleaños
       //categoria arreglo de aniversario
        if (Auth::check()) {
             $valor=1;
             //extraer id del usuario
             $id_usuario=Auth::id();
        }
        else{
             $valor=0;
             $id_usuario=null;
        }

        //categoria arreglo de cumpleaños
        $id_cat=3;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.catalogo')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);
    }
       public function catalogo_enamorados()
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

        //categoria arreglo de cumpleaños
        $id_cat=4;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.catalogo')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);
    }
         public function catalogo_kid_zone()
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

        //categoria arreglo de cumpleaños
        $id_cat=5;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.catalogo')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);
    }
     public function catalogo_gracias()
    {
        //categoria arreglo de cumpleaños
       if (Auth::check()) {
             $valor=1;
             //extraer id del usuario
             $id_usuario=Auth::id();
        }
        else{
             $valor=0;
             $id_usuario=null;
        }

        //categoria arreglo de cumpleaños
        $id_cat=6;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.catalogo')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos);
    }
      public function catalogo_lo_siento()
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

        //categoria arreglo de cumpleaños
        $id_cat=7;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.catalogo')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);
    }

      public function catalogo_maternidad()
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

        //categoria arreglo de cumpleaños
        $id_cat=8;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.catalogo')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);
    }
    public function catalogo_por_que_no()
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

        //categoria arreglo de cumpleaños
        $id_cat=9;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.catalogo')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);
    }
   
    public function catalogo_graduaciones()
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

        //categoria arreglo de cumpleaños
        $id_cat=10;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.catalogo')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);
    }

    public function catalogo_nacimientos()
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

        //categoria arreglo de cumpleaños
        $id_cat=11;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.catalogo')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);
    }

      public function catalogo_mejorate()
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

        //categoria arreglo de cumpleaños
        $id_cat=12;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.catalogo')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);
    }
     public function arreglos_temporada()
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

        //categoria arreglo de cumpleaños
        $id_cat=22;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.catalogo')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);
    }

         public function show($id)
    {
        //extraer id de usuario actual
        if (Auth::check()) {
             $valor=1;
             //extraer id del usuario
             $id_usuario=Auth::id();
        
        $id_deseable=0;
        //consulta para saber si el usuario ya registro ese producto
        $valid_registro= $this->deseable
            ->where('user_id',  $id_usuario)
            ->where('product_id',  $id)
            ->get();

        //extraer el id del deseable 
         foreach ($valid_registro as $desea) {
           $deseable_pk= $desea->id;    
           $id_deseable=$id_deseable+$deseable_pk;
         }  
        
        //if aun no se ha registrado entonces generar registro
        if(count($valid_registro) >= 1){
            //borrar registro
            $borrar_deseable = Deseable::find($id_deseable);
            $borrar_deseable->delete();

            //devuelve mensaje
            return back() ;
        }
        else{
            //crear registro en la table deseable
            $this->deseable->create([
              'user_id'=> $id_usuario,
              'product_id'=> $id
            ]);

            //devuelve mensaje
            return back() ;
        }
        }
        else{
             $valor=0;
             $id_usuario=null;
        }
   }
       public function finalizar_compra()
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

         return view('frontend.pages.finalizar')
         ->with('validar',$valor);
    }

}
