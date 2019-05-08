<?php

namespace App\Http\Controllers\Admin;
//manda llamar el metodo
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\ProductoCategoria;

use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
   protected $product;
   protected $cat;
   protected $product_cat;

    // contructor de modelo para uso en cualquier método
    function __construct(Product $product, Category $cat, ProductoCategoria $product_cat)
    {
        $this->product = $product;
        $this->cat = $cat;
        $this->product_cat=$product_cat;
    }
    public function index()
    {
        $products = $this->product->all();
        $categories = $this->cat->all();
        $products_categorias = $this->product_cat->all();

        return view('admin.product.products', compact('products', 'categories'));
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
            'type'=> $request->type,
            'description' => $request->description,
            'desc_b' => $request->desc_b,
            'desc_c' => $request->desc_c,
            'detalle' => $request->detalle,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'stock' => $request->stock,
            'path' => $path
        ]);

        $name_product=$request->name;
        $id_category=$request->category;

        //seleccionar producto con el nombre
        $producto= $this->product->where('name',  $name_product)->get();

        //extraer la id del producto
        foreach ($producto as $items) {
           $id_producto= $items->id;  

           //guardar registro en tabla producto categoria
           $this->product_cat->create([
                'producto_id'=> $id_producto,
                'categoria_id'=> $id_category
           ]);
        }

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
