<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
class CategoryController extends Controller
{
     protected $category;

    // contructor de modelo para uso en cualquier método
    function __construct(Category $category)
    {
        $this->category = $category;
    }
    public function index()
    {
     $categories = $this->category->all();
        return view('admin.category.categories', compact('categories')); 
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->category->create([
           'type' => $request->type,
           'category' => $request->category
        ]);

         return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
       $cat=Category::find($id);
        return view('admin.category.edit')->with('category',$cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
    $request->validate([
        'category'=>'required'
       
      ]);

      $share = Category::find($id);
      $share->category = $request->get('category');
      $share->save();

      return redirect('/category')->with('success', 'La categoría ha sido actualizada con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
     $share = Category::find($id);
     $share->delete();

     return redirect('/category')->with('success', 'La categoría ha sido eliminada');
    }
}
