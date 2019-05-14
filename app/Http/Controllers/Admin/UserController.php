<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    protected $user;
    protected $role;
    // contructor de modelo para uso en cualquier método
    function __construct(User $user, Role $role)
    {
        $this->user = $user;
        $this->role = $role;
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
                $users = $this->user->all();
                // obtiene todos los regístros de la tabla roles
                $roles = $this->role->all();
                // retorna la vista con ls datos obtenidos en las variables $users y $roles
                return view('admin.user.users', compact('users', 'roles'))->with('validar',$valor);
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
        return view('admin.user.create');
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
        Storage::disk('local')->put('public/users/'.$fileName, \File::get($file));
        //crea la ruta con el nombre de la image donde será almacenada para insertarla en el campo path de la tabla users
        //$path = storage_path('public/users/'.$fileName);
        $path = $file->storeAs('/storage/app/public/users', $fileName);
        // método create del modelo User
        //dd($path);
        $this->user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
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
        //
    }
}
