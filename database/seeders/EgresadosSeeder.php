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
                'password'=> bcrypt('prueba123'),
            ],  
            [
                'NoControl'=>'17270172',
                'name'=>'Victor Daniel',
                'a_paterno'=>'Solano',
                'a_materno'=>'Hernandez',
                'carrera'=>'Sistemas Computacionales',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'planDeestudios'=>'1',
                'email'=>'victor_1996_darojo@hotmail.com',
                'email_verified_at'=>null,
                'telefono'=>'9612284856',
                'password'=> bcrypt('prueba123'),
            ],  
            [
                'NoControl'=>'16270745',
                'name'=>'Jose Manuel',
                'a_paterno'=>'Castellanos',
                'a_materno'=>'Marroquin',
                'carrera'=>'Sistemas Computacionales',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'planDeestudios'=>'1',
                'email'=>'josecastmarroquin@gmail.com',
                'email_verified_at'=>null,
                'telefono'=>'9612086374',
                'password'=> bcrypt('prueba123'),
            ],   
            [
                'NoControl'=>'17270832',
                'name'=>'Daniel de Jesus',
                'a_paterno'=>'Angel',
                'a_materno'=>'Montes',
                'carrera'=>'Electrica',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'planDeestudios'=>'1',
                'email'=>'danielmontes652@gmail.com',
                'email_verified_at'=>null,
                'telefono'=>'9611175328',
                'password'=> bcrypt('prueba123'),
            ],  
            [
                'NoControl'=>'14270782',
                'name'=>'Einer Alejandro',
                'a_paterno'=>'Lara',
                'a_materno'=>'Aguilar',
                'carrera'=>'Mecanica',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'planDeestudios'=>'1',
                'email'=>'L14270782@tuxtla.tecnm.mx',
                'email_verified_at'=>null,
                'telefono'=>'9613138152',
                'password'=> bcrypt('prueba123'),
            ],  
            [
                'NoControl'=>'17271050',
                'name'=>'Jeziel Adonai',
                'a_paterno'=>'Penagos',
                'a_materno'=>'Suarez',
                'carrera'=>'Mecánica',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'planDeestudios'=>'1',
                'email'=>'L17271050@tuxtla.tecnm.mx',
                'email_verified_at'=>null,
                'telefono'=>'9613649868',
                'password'=> bcrypt('prueba123'),
            ], 
            [
                'NoControl'=>'16270786',
                'name'=>'Eugenia Abelina',
                'a_paterno'=>'Jimenez',
                'a_materno'=>'Aguilar',
                'carrera'=>'Sistemas Computacionales',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'planDeestudios'=>'1',
                'email'=>'eugeniaabelinaj@gmail.com',
                'email_verified_at'=>null,
                'telefono'=>'9611010278',
                'password'=> bcrypt('prueba123'),
            ],  
            [
                'NoControl'=>'16270831',
                'name'=>'Citlali Anahi',
                'a_paterno'=>'Toala',
                'a_materno'=>'De la Rosa',
                'carrera'=>'Sistemas Computacionales',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'planDeestudios'=>'1',
                'email'=>'anahi13t@gmail.com',
                'email_verified_at'=>null,
                'telefono'=>'9671060982',
                'password'=> bcrypt('prueba123'),
            ],                         

            
              
        ]);
    }
}
