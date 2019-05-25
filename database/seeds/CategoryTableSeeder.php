<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
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
        		'type' => 'arreglo',
        		'category' => 'CUMPLEAÑOS',
        		'path' => 'storage/app/public/category/arreglo_cumpleanos.png'    
        	],

        	[
        		'type' => 'arreglo',
        		'category' => 'ANIVERSARIO',
        		'path' => 'storage/app/public/category/arreglo_aniversario.png'    
        	],

        	[
        		'type' => 'arreglo',
        		'category' => 'COMPROMISOS Y BODAS',
        		'path' => 'storage/app/public/category/arreglo_compromisos.png'    
        	],

        	[
        		'type' => 'arreglo',
        		'category' => 'ENAMORADOS',
        		'path' => 'storage/app/public/category/arreglo_enamorados.png'    
        	],

        	[
        		'type' => 'arreglo',
        		'category' => 'KIDS ZONE',
        		'path' => 'storage/app/public/category/arreglo_kidszone.png'    
        	],

        	[
        		'type' => 'arreglo',
        		'category' => 'GRACIAS',
        		'path' => 'storage/app/public/category/arreglo_gracias.png'    
        	],

        	[
        		'type' => 'arreglo',
        		'category' => 'LO SIENTO',
        		'path' => 'storage/app/public/category/arreglo_lo siento.png'    
        	],

        	[
        		'type' => 'arreglo',
        		'category' => 'MATERNIDAD',
        		'path' => 'storage/app/public/category/arreglo_maternidad.png'    
        	],

        	[
        		'type' => 'arreglo',
        		'category' => 'POR QUÉ NO',
        		'path' => 'storage/app/public/category/arreglo_ por_que_no.png'    
        	],
        	[
        		'type' => 'arreglo',
                'category' => 'GRADUACIONES',
                'path' => 'storage/app/public/category/arreglo_graduaciones.png'
        	],
        	[
        		'type' => 'arreglo',
                'category' => 'NACIMIENTOS',
                'path' => 'storage/app/public/category/arreglo_nacimientos.png'
        	],
        	[
        		'type' => 'arreglo',
                'category' => 'MEJORATE',
                'path' => 'storage/app/public/category/arreglo_mejorate.jpg'
        	],
            [
                'type' => 'globos',
                'category' => 'CUMPLEAÑOS',
                'path' => 'storage/app/public/category/globo_cumple.png'
            ],
            [
                'type' => 'globos',
                'category' => 'MEJORATE',
                'path' => 'storage/app/public/category/globos mejorate.jpg'
            ],
            [
                'type' => 'globos',
                'category' => 'NACIMIENTOS',
                'path' => 'storage/app/public/category/globos nacimientos.png'
            ],
            [
                'type' => 'globos',
                'category' => 'KIDS ZONE',
                'path' => 'storage/app/public/category/globos_kids.png'
            ],
            [
                'type' => 'globos',
                'category' => 'ENAMORADOS',
                'path' => 'storage/app/public/category/globos enamorados.png'
            ],
            [
                'type' => 'globos',
                'category' => 'GRADUACIONES',
                'path' => 'storage/app/public/category/globos graduaciones.png'
            ],
            [
                'type' => 'globos',
                'category' => 'LETRAS',
                'path' => 'storage/app/public/category/letras_numeros.png'
            ],
            [
                'type' => 'paquetes completos',
                'category' => 'PAQUETES COMPLETOS',
                'path' => 'storage/app/public/category/paquetes_completos.png'
            ],
            [
                'type' => 'paquetes',
                'category' => 'paquetes',
                'path' => 'storage/app/public/category/paquetes.png'
            ],
            [
                'type' => 'temporada',
                'category' => 'TEMPORADA',
                'path' => 'storage/app/public/category/temporada.png'
            ],
        	[
                'type' => 'complemento',
                'category' => 'COMPLEMENTO',
                'path' => 'storage/app/public/category/temporada.png'
            ],
              [
                'type' => 'globos',
                'category' => 'NUMEROS',
                'path' => 'storage/app/public/category/letras_numeros.png'
            ]
        ];
                Category::insert($data);

    }
}
