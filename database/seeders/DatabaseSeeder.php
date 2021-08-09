<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        //$this->call(EgresadosSeeder::class);
        $this->call(EmpleadosSeeder::class);
        $this->call(PlanesSeeder::class);
        $this->call(OpcionesSeeder::class);
        

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
                'rol' => 'admin',
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
                'rol' => 'egresado',
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
                'rol' => 'division',
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
                'rol' => 'jefatura',
                'password'=> bcrypt('prueba123'),
            ],
        ]);
    }
}
