<?php

namespace App\Http\Controllers\Admin;
//manda llamar el metodo
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Producto;

class ProductoController extends Controller
{
   protected $product;

    // contructor de modelo para uso en cualquier método
    function __construct(Producto $product)
    {
        $this->product = $product;
    }
    public function index()
    {
        $products = $this->product->all();
        return view('admin.product.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->product->create([
            'nombre_producto' => $request->nombre_producto,
            'descripcion' => $request->descripcion,
            'cantidad' => $request->cantidad,
            'stock' => $request->stock
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $var=$this->product->findOrFail($id);
        $var->delete();
        return back();

    }
}
