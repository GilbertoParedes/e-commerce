<?php

namespace App\Http\Controllers\Admin;
//manda llamar el metodo
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\Storage;

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
     

        
        $file = $request->file('photo');
        // toma el objeto del archivo y se obtine el nombre real con el método getClientOriginalName
        $fileName = $file->getClientOriginalName();
        
        // Almacena el archivo en el disco local del directorio Storage
        Storage::disk('local')->put('public/product/'.$fileName, \File::get($file));
        //crea la ruta con el nombre de la image donde será almacenada para insertarla en el campo path de la tabla users
        //$path = storage_path('public/users/'.$fileName);
        $path = $file->storeAs('/storage/app/public/product', $fileName);
        // método create del modelo User
        //dd($path);
      
        $this->product->create([
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'stock' => $request->stock,
            'path' => $path
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
        return view('admin.product.edit')->with('product',$productEdit);
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
      $productoModificar->update($request->all());
      

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
