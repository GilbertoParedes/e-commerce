<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CatalogoController extends Controller
{
    
    protected $category;
      function __construct( Category $category)
    {
        $this->category = $category;

    }
    public function index()
    {
         return view('frontend.pages.catalogo');

    }
 	public function show($id)
    {
    	 $categorias = $this->category->find($id);
        // return view('frontend.pages.catalogo')->with('category',$categorias);

    }


}
