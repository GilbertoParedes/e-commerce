<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use App\ProductoCategoria;
use Illuminate\Support\Facades\Storage;

class CatalogoController extends Controller
{
    
    protected $category;
    protected $product;
    protected $product_category;
      function __construct( Category $category, Product $product, ProductoCategoria $product_category)
    {
        $this->category = $category;
        $this->product = $product;
        $this->product_category = $product_category;

    }
    public function index()
    {
         return view('frontend.pages.catalogo');

    }
 	public function catalogo_cumpleanos()
    {
        //categoria arreglo de cumpleaños
        $id_cat=3;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        return view('frontend.pages.catalogo', compact('categorias', 'cat_prod','productos'));
    }
    public function catalogo_aniversario()
    {
        //categoria arreglo de cumpleaños
        $id_cat=4;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        return view('frontend.pages.catalogo', compact('categorias', 'cat_prod','productos'));
    }
  

    public function catalogo_compromisos_bodas()
    {
        //categoria arreglo de cumpleaños
        $id_cat=5;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        return view('frontend.pages.catalogo', compact('categorias', 'cat_prod','productos'));
    }
       public function catalogo_enamorados()
    {
        //categoria arreglo de cumpleaños
        $id_cat=6;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        return view('frontend.pages.catalogo', compact('categorias', 'cat_prod','productos'));
    }
         public function catalogo_kid_zone()
    {
        //categoria arreglo de cumpleaños
        $id_cat=7;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        return view('frontend.pages.catalogo', compact('categorias', 'cat_prod','productos'));
    }
     public function catalogo_gracias()
    {
        //categoria arreglo de cumpleaños
        $id_cat=12;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        return view('frontend.pages.catalogo', compact('categorias', 'cat_prod','productos'));
    }

    public function catalogo_graduaciones()
    {
        //categoria arreglo de cumpleaños
        $id_cat=13;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        return view('frontend.pages.catalogo', compact('categorias', 'cat_prod','productos'));
    }

     public function catalogo_maternidad()
    {
        //categoria arreglo de cumpleaños
        $id_cat=14;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        return view('frontend.pages.catalogo', compact('categorias', 'cat_prod','productos'));
    }


         public function catalogo_lo_siento()
    {
        //categoria arreglo de cumpleaños
        $id_cat=18;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        return view('frontend.pages.catalogo', compact('categorias', 'cat_prod','productos'));
    }
   
        public function catalogo_por_que_no()
    {
        //categoria arreglo de cumpleaños
        $id_cat=15;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        return view('frontend.pages.catalogo', compact('categorias', 'cat_prod','productos'));
    }
   

    public function catalogo_nacimientos()
    {
        //categoria arreglo de cumpleaños
        $id_cat=16;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        return view('frontend.pages.catalogo', compact('categorias', 'cat_prod','productos'));
    }

      public function catalogo_mejorate()
    {
        //categoria arreglo de cumpleaños
        $id_cat=17;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        return view('frontend.pages.catalogo', compact('categorias', 'cat_prod','productos'));
    }
     public function arreglos_temporada()
    {
        //categoria arreglo de cumpleaños
        $id_cat=24;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        return view('frontend.pages.catalogo', compact('categorias', 'cat_prod','productos'));
    }
}
