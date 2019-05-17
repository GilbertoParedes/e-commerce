<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Roles;
use App\Permission;
use App\RolesPermission;
use App\User;

use Illuminate\Support\Facades\Auth;

class RolesPermissionController extends Controller
{
    protected $roles;
    protected $permission;
    protected $rolespermission;
    protected $user;
    function __construct(Roles $roles, Permission $permission,RolesPermission $rolespermission,User $user)
    {
        $this->roles = $roles;
        $this->permission = $permission;
        $this->rolespermission = $rolespermission;  
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
                $verRolesPermisos = $this->rolespermission->all();
                $verRoles = $this->roles->all();
                $verPermisos = $this->permission->all();
                   return view('admin.rolespermission.roles_permission', compact('verRolesPermisos','verRoles', 'verPermisos'));
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
