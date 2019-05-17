<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\User;
class CategoryController extends Controller
{
     protected $category;
     protected $user;
    // contructor de modelo para uso en cualquier método
    function __construct(Category $category,User $user)
    {
        $this->category = $category;
        $this->user = $user;
    }
    public function index()
    {
        if (Auth::check()) {
            $id_usuario=Auth::id();
            // obtiene todos los regístros de la tabla users 
            $autenticar_user= $this->user->where('id',  $id_usuario)->get();
            foreach ($autenticar_user as $values) {
              $type_user=$values->type_user;
              if ($type_user=="Admin") {
                $valor=1;

                 $categories = $this->category->all();
                    return view('admin.category.categories', compact('categories')); 
             }
              else{
                $valor=1;
                 return redirect('index')->with('validar',$valor);
              }
            }
        }
        else{
        $valor=0;
        return view('frontend.pages.index')->with('validar',$valor);
        }
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
        //dd($request->all());
       //obtine el campo de tipo archivo
        $file = $request->file('photo');
        // toma el objeto del archivo y se obtine el nombre real con el método getClientOriginalName
        $fileName = $file->getClientOriginalName();
        
        // Almacena el archivo en el disco local del directorio Storage
        Storage::disk('local')->put('public/category/'.$fileName, \File::get($file));
        //crea la ruta con el nombre de la image donde será almacenada para insertarla en el campo path de la tabla users
        //$path = storage_path('public/users/'.$fileName);
        $path = $file->storeAs('/storage/app/public/category', $fileName);
        // método create del modelo User
        //dd($path);
        $this->category->create([
            'type' => $request->type,
            'category' => $request->category,
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
