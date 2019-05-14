<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data = [                               
        	[
        		'name' => 'Product Create',
                'guard_name'=> 'productCreate'  
        	],
        	[
        		'name' => 'Product View',
                'guard_name'=> 'productView'
        	],
        	[
        		'name' => 'Product Delete',
                'guard_name'=> 'productDelete'
        	],
        	[
        		'name' => 'Product Update',
                'guard_name'=> 'productUpdate'
        	],
        	[
        		'name' => 'Roles Create',
                'guard_name'=> 'RolesCreate'  
        	],
        	[
        		'name' => 'Roles View',
                'guard_name'=> 'RolesView'
        	],
        	[
        		'name' => 'Roles Delete',
                'guard_name'=> 'RolesDelete'
        	],
        	[
        		'name' => 'Roles Update',
                'guard_name'=> 'RolesUpdate'
        	],
        		[
        		'name' => 'Permission Create',
                'guard_name'=> 'PermissionCreate'  
        	],
        	[
        		'name' => 'Permission View',
                'guard_name'=> 'PermissionView'
        	],
        	[
        		'name' => 'Permission Delete',
                'guard_name'=> 'PermissionDelete'
        	],
        	[
        		'name' => 'Permission Update',
                'guard_name'=> 'PermissionUpdate'
        	],
        	[
        		'name' => 'Category Create',
                'guard_name'=> 'CategoryCreate'  
        	],
        	[
        		'name' => 'Category View',
                'guard_name'=> 'CategoryView'
        	],
        	[
        		'name' => 'Category Delete',
                'guard_name'=> 'CategoryDelete'
        	],
        	[
        		'name' => 'Category Update',
                'guard_name'=> 'CategoryUpdate'
        	],
        		[
        		'name' => 'Deseables Create',
                'guard_name'=> 'DeseablesCreate'  
        	],
        	[
        		'name' => 'Deseables View',
                'guard_name'=> 'DeseablesView'
        	],
        	[
        		'name' => 'Deseables Delete',
                'guard_name'=> 'DeseablesDelete'
        	],
        	[
        		'name' => 'Deseables Update',
                'guard_name'=> 'DeseablesUpdate'
        	],
        		[
        		'name' => 'Carrito Create',
                'guard_name'=> 'CarritoCreate'  
        	],
        	[
        		'name' => 'Carrito View',
                'guard_name'=> 'CarritoView'
        	],
        	[
        		'name' => 'Carrito Delete',
                'guard_name'=> 'CarritoDelete'
        	],
        	[
        		'name' => 'Carrito Update',
                'guard_name'=> 'CarritoUpdate'
        	],
        		[
        		'name' => 'Principal',
                'guard_name'=> 'principal'  
        	],
        	[
        		'name' => 'Tienda ver productos',
                'guard_name'=> 'tiendaverproducto'
        	],
        	[
        		'name' => 'Products Details ',
                'guard_name'=> 'productDetails'
        	]

        ];

        Permission::insert($data);
    }
}
