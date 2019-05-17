<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;
use App\User;
class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $role;
    protected $user;
    function __construct(Role $role,User $user)
    {
        $this->role = $role;
        $this->user = $user;

    }

    public function index()
    {
         if (Auth::check()) {
            //extraccion de id de usuario que inició  sesión
            $id_usuario=Auth::id();
            //consulta de autenticacion
            $autenticar_user= $this->user->where('id',  $id_usuario)->get();
            //extraer tipo de usuario
            foreach ($autenticar_user as $values) {
              $type_user=$values->type_user;
                
                if ($type_user=="Admin") {
                    $roles = $this->role->all();
                    return view('admin.roles.index', compact('roles'));
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
        $this->role->create($request->all());
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
        $role = $this->role->find($id);
        return view('admin.roles.edit', compact('role'));
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
        $role = $this->role->find($id);
        $role->update($request->all());
        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = $this->role->find($id);
        $role->delete();
        return back();
    }
}
