<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class RolesPermission extends Model
{
    //nombre de la tabla
    protected $table='role_has_permissions';
    //atributos de la tabla
    protected $fillable = ['permission_id', 'role_id'];
	public $timestamps = false;
	public function permission()
	 {
	        return $this->hasMany('App\Permission','permission_id');
	 }
	 public function roles()
	 {
	        return $this->hasMany('App\Roles','role_id');
	 }
}
