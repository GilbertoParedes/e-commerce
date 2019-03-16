<?php

namespace App\Http\Controllers\Admin;
//manda llamar el metodo
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
   protected $product;

    // contructor de modelo para uso en cualquier método
    function __construct(Product $product)
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
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
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
         $productEdit=Product::find($id);
        return view('admin.products.edit')->with('product',$productEdit);
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
        'name'=>'required',
        'description'=>'required',
        'quantity'=>'required',
        'stock'=>'required'
      ]);

      $productoModificar = Product::find($id);
      $productoModificar->product = $request->get('product');
      $productoModificar->save();

      return redirect('/products')->with('success', 'El producto ha sido actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

     $share = Product::find($id);
     $share->delete();

     return redirect('/products')->with('success', 'El producto ha sido eliminado');

    }
}
