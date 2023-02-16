<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublicacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publicaciones')->insert(
            [   'usuario'=>1,
                'titulo'=>"Publicación de prueba 1",
                'descripcion'=>"soy una publicación de prueba.",
                'imagen'=>"https://upload.wikimedia.org/wikipedia/commons/6/64/Ejemplo.png",
                'enventa'=>false,
                'precio'=>0
            ]);
        DB::table('publicaciones')->insert(
            [   'usuario'=>1,
                'titulo'=>"Publicación de prueba 2",
                'descripcion'=>"soy una publicación de prueba.





                Hola :) .",
                'imagen'=>"https://upload.wikimedia.org/wikipedia/commons/6/64/Ejemplo.png",
                'enventa'=>true,
                'precio'=>100
            ]);
    }
}
