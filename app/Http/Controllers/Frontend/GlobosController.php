<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use App\ProductoCategoria;
use Illuminate\Support\Facades\Storage;

class GlobosController extends Controller
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
         return view('frontend.pages.globos');
    }

	public function globos_cumpleanos()
    {
        //categoria arreglo de cumpleaños
        $id_cat=9;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        return view('frontend.pages.globos', compact('categorias', 'cat_prod','productos'));
    }
    public function globos_mejorate()
    {
        //categoria arreglo de cumpleaños
        $id_cat=4;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        return view('frontend.pages.globos', compact('categorias', 'cat_prod','productos'));
    }

    public function globos_nacimientos()
    {
        //categoria arreglo de cumpleaños
        $id_cat=5;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        return view('frontend.pages.globos', compact('categorias', 'cat_prod','productos'));
    }
       public function globos_kids_zone()
    {
        //categoria arreglo de cumpleaños
        $id_cat=6;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        return view('frontend.pages.globos', compact('categorias', 'cat_prod','productos'));
    }
         public function globos_enamorados()
    {
        //categoria arreglo de cumpleaños
        $id_cat=7;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        return view('frontend.pages.globos', compact('categorias', 'cat_prod','productos'));
    }
         public function globos_graduaciones()
    {
        //categoria arreglo de cumpleaños
        $id_cat=8;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        return view('frontend.pages.globos', compact('categorias', 'cat_prod','productos'));
    }
        public function globos_letras_numeros()
    {
        //categoria arreglo de cumpleaños
        $id_cat=10;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        return view('frontend.pages.globos', compact('categorias', 'cat_prod','productos'));
    }
        public function paquetescompletos()
    {
        //categoria arreglo de cumpleaños
        $id_cat=11;
        $categorias = $this->category->find($id_cat);
        //buscar los productos de la tabla product_category
        $cat_prod= $this->product_category->where('categoria_id',  $id_cat)->get();
        $productos = $this->product->all();
        return view('frontend.pages.paquetescompletos', compact('categorias', 'cat_prod','productos'));
    }
 
}
