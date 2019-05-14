<?php

use Illuminate\Database\Seeder;
use App\Roles;

class RolesTableSeeder extends Seeder
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
        		'name' => 'Admin',
                'guard_name'=> 'admin'
               
        	],
        	[
        		'name' => 'Client',
                'guard_name'=> 'client'
        	]
        ];

        Roles::insert($data);
    }
}
