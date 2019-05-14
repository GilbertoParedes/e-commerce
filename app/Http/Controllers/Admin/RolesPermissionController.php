<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Roles;
use App\Permission;
use App\RolesPermission;

class RolesPermissionController extends Controller
{
    protected $roles;
    protected $permission;
    protected $rolespermission;

    function __construct(Roles $roles, Permission $permission,RolesPermission $rolespermission)
    {
        $this->roles = $roles;
        $this->permission = $permission;
        $this->rolespermission = $rolespermission;  
    }

    public function index()
    {
        $verRolesPermisos = $this->rolespermission->all();
        $verRoles = $this->roles->all();
        $verPermisos = $this->permission->all();

        return view('admin.rolespermission.roles_permission', compact('verRolesPermisos','verRoles', 'verPermisos'));
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
        //
         $permiso=$request->permiso;
         $rol=$request->rol;

        //buscar si ya ha sido asignado
          $consulta= $this->rolespermission
          ->where('permission_id',  $permiso)
          ->where('role_id',  $rol)
          ->get();
          $contar_registros=count($consulta);
          if ($contar_registros==0) {
           $this->rolespermission->create([
               'permission_id' => $permiso,
               'role_id'=> $rol    
           ]);

           return back(); 

          }
          else{
               return redirect()->back()->with('alert', 'La relacion ya habia sido asignada');
          }
       
            
       
       
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
     $share = RolesPermission::find($id);
     $share->delete();
     return redirect('/roles_permisos')->with('success', 'Asignación de permiso y rol eliminada');
    }
}
