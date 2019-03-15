<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
class CategoriaController extends Controller
{
     protected $categoria;

    // contructor de modelo para uso en cualquier método
    function __construct(Categoria $categoria)
    {
        $this->categoria = $categoria;
    }
    public function index()
    {
     $categorias = $this->categoria->all();
        return view('admin.categoria.category', compact('categorias')); 
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->categoria->create([
           'tipo' => $request->tipo,
            'categoria' => $request->categoria
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
    //    dd($id);
    /* $cat=Categoria::find($id);
    dd($id);*/
  //return view('admin.categoria.edit')->width('categoria',$cat);
  /*   $cat = Categoria::where('pk_categoria', '=', $id)
            ->get(['categoria']);
      dd($cat);*/
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
