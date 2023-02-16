<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            ['username'=>"prueba",
                'descripcion'=>"soy un usuario de prueba.",
                'email'=>"prueba@prueba.es",
                'password'=>"prueba1",
                'foto'=>"https://cdn-icons-png.flaticon.com/512/456/456212.png"
        ]);
    }
}
