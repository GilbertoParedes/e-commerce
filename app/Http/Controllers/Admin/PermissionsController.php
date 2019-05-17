<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;
use App\User;
class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // variable protegida que almacena el modelo de Permisos
    protected $permission;
    protected $user;
    // Constructor de permisos
    function __construct(Permission $permission, User $user)
    {
        $this->permission = $permission;
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
                        // accede a todos los regístros de la tabla de permisos
                        $permissions = $this->permission->all();
                        // retorna la vista principal del administrador de permisos junto con los permisos obtenidos
                        return view('admin.permission.index', compact('permissions'));
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->permission->create($request->all());
        return back();
        //dd($request->all());
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
        $permission = $this->permission->find($id);
        return view('admin.permission.edit', compact('permission'));
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
        $permission = $this->permission->find($id);
        $permission->update($request->all());
        return redirect()->route('permissions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission = $this->permission->find($id);
        $permission->delete();
        return back();
    }
}
