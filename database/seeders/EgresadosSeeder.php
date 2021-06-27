<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EgresadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'NoControl'=>'16270821',
                'name'=>'Luis Gabriel',
                'a_paterno'=>'Rincon',
                'a_materno'=>'Chong',
                'carrera'=>'Sistemas Computacionales',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'planDeestudios'=>'1',
                'email'=>'gabo.pro3@gmail.com',
                'email_verified_at'=>null,
                'telefono'=>'9612465121',
                'password'=> bcrypt('prueba123'),
            ],
            
            [
                'NoControl'=>'16270844',
                'name'=>'Wanersert Jonathan',
                'a_paterno'=>'Vazquez',
                'a_materno'=>'Garcia',
                'carrera'=>'Sistemas Computacionales',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'planDeestudios'=>'1',
                'email'=>'L16270844@tuxtla.tecnm.mx',
                'email_verified_at'=>null,
                'telefono'=>'9611985948',
                'password'=> bcrypt('prueba123'),
            ],              
        ]);
    }
}
