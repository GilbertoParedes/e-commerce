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
                'apellido_p'=> 'Paredes',
                'apellido_m'=> 'Banuelos',
                'sexo'=>'Hombre',
                'edad'=> 23,
                'aniversario'=> '1995-08-28', 
                'type_user'=>'Client',
        		'email' => 'gparedes@marivalaccess.com',
        		'password' => bcrypt('secret'),
                'path' => 'https://st2.depositphotos.com/2877845/10915/i/950/depositphotos_109156048-stock-photo-portrait-of-white-headed-capuchin.jpg'
        	],
        	[
        		'name' => 'Laura',
                'apellido_p'=> 'Valdez',
                'apellido_m'=> 'Morones',
                'sexo'=>'Hombre',
                'edad'=> 23,
                'aniversario'=> '1995-08-28', 
                'type_user'=>'Admin',
        		'email' => 'lauratopaciovaldez@gmail.com',
        		'password' => bcrypt('secret'),
                'path' => 'https://www.ecured.cu/images/thumb/c/c6/Avestruces.jpg/260px-Avestruces.jpg'
        	]
        ];

        User::insert($data);
    }
}
