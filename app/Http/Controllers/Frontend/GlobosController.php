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

class GlobosController extends Controller
{   
    protected $deseable;
    protected $category;
    protected $product;
    protected $product_category;
      function __construct( Category $category, Product $product, ProductoCategoria $product_category,Deseable $deseable)
    {
        $this->category = $category;
        $this->product = $product;
        $this->product_category = $product_category;
        $this->deseable=$deseable;

    }
 
    public function index()
    {
         return view('frontend.pages.globos');
    }

	public function globos_cumpleanos()
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
        $id_cat=13;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.globos')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);
    }
    public function globos_mejorate()
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
        $id_cat=14;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.globos')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);
    }

    public function globos_nacimientos()
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
        $id_cat=15;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.globos')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);
    }
       public function globos_kids_zone()
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
        $id_cat=16;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.globos')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);
    }
         public function globos_enamorados()
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
        $id_cat=17;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.globos')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);
    }
         public function globos_graduaciones()
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
        $id_cat=18;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.globos')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);
    }
        public function globos_letras_numeros()
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

         return view('frontend.pages.letr_num')
         ->with('validar',$valor)
        ;
    }
          public function letras()
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
        $id_cat=19;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.letras')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);
    }
        public function numeros()
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
        $id_cat=24;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.letras')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);
    }
        public function paquetescompletos()
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
        $id_cat=20;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.paquetescompletos')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);
    }
       public function paquetes()
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
        $id_cat=21;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        //buscar si el producto está registrado en favoritos

        $deseable_buscar= $this->deseable
            ->where('user_id',  $id_usuario)
            ->get();    
    
         return view('frontend.pages.globos')
         ->with('validar',$valor)
         ->with('categorias',$categorias)
         ->with('cat_prod',$cat_prod)
         ->with('productos',$productos)
         ->with('deseable_buscar',$deseable_buscar);
    }
 
}
