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
        		'password' => bcrypt('secret'),
                'path' => 'https://st2.depositphotos.com/2877845/10915/i/950/depositphotos_109156048-stock-photo-portrait-of-white-headed-capuchin.jpg'
        	],
        	[
        		'name' => 'Admin',
        		'email' => 'admin@admin.com',
        		'password' => bcrypt('secret'),
                'path' => 'https://www.ecured.cu/images/thumb/c/c6/Avestruces.jpg/260px-Avestruces.jpg'
        	]
        ];

        User::insert($data);
    }
}
