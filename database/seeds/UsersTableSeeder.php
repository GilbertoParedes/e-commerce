<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
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
        		'name' => 'Gilberto',
        		'email' => 'gparedes@marivalaccess.com',
        		'password' => bcrypt('secret')
        	],
        	[
        		'name' => 'Admin',
        		'email' => 'admin@admin.com',
        		'password' => bcrypt('secret')
        	]
        ];

        User::insert($data);
    }
}
