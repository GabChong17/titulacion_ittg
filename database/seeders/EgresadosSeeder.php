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
                'rol' => 'egresado',
                'estado'=> 'Tramite_Iniciado',
                'password'=> bcrypt('prueba123'),
            ],  
            [
                'NoControl'=>'16270796',
                'name'=>'Hector Alfonso',
                'a_paterno'=>'Martinez',
                'a_materno'=>'Vazquez',
                'carrera'=>'Sistemas Computacionales',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'planDeestudios'=>'1',
                'email'=>'hectormartinez2v@gmail.com',
                'email_verified_at'=>null,
                'telefono'=>'9671475452',
                'rol' => 'egresado',
                'estado'=> 'Tramite_Iniciado',
                'password'=> bcrypt('prueba123'),
            ],   
            [
                'NoControl'=>'16270770',
                'name'=>'Karen Gretchen',
                'a_paterno'=>'Galvez',
                'a_materno'=>'Laguna',
                'carrera'=>'Sistemas Computacionales',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'planDeestudios'=>'1',
                'email'=>'gretchengalvezlaguna@hotmail.com',
                'email_verified_at'=>null,
                'telefono'=>'9614553797',
                'rol' => 'egresado',
                'estado'=> 'Tramite_Iniciado',
                'password'=> bcrypt('prueba123'),
            ],  
           
        ]);
    }
}
