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

        DB::table('egresados')->insert([
            [
                'NoControl'=>'16270821',
                'Nombre'=>'Luis Gabriel',
                'APaterno'=>'Rincon',
                'AMaterno'=>'Chong',
                'Carrera'=>'Sistemas Computacionales',
                'Campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'PlanDeEstudios'=>'1',
                'email'=>'gabo.pro3@gmail.com',
                'Telefono'=>'9612465121',
                'password' => bcrypt('prueba123'),
            ], 
            [
                'NoControl'=>'19270999',
                'Nombre'=>'Gentian Rosario',
                'APaterno'=>'Muñoz',
                'AMaterno'=>'Llaven',
                'Carrera'=>'Logistica',
                'Campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'PlanDeEstudios'=>'1',
                'email'=>'gentianmunoz@outlook.es',
                'Telefono'=>'9611817136',
                'password' => bcrypt('prueba123'),
            ], 
            [
                'NoControl'=>'16270844',
                'Nombre'=>'Wanersert Jonathan',
                'APaterno'=>'Vazquez',
                'AMaterno'=>'Garcia',
                'Carrera'=>'Sistemas Computacionales',
                'Campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'PlanDeEstudios'=>'1',
                'email'=>'L16270844@tuxtla.tecnm.mx',
                'Telefono'=>'9611985948',
                'password' => bcrypt('prueba123'),
            ], 
            [
                'NoControl'=>'16270796',
                'Nombre'=>'Hector Alfonso',
                'APaterno'=>'Martinez',
                'AMaterno'=>'Vazquez',
                'Carrera'=>'Sistemas Computacionales',
                'Campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'PlanDeEstudios'=>'1',
                'email'=>'hectormartinez2v@gmail.com',
                'Telefono'=>'9671475452',
                'password' => bcrypt('prueba123'),
            ], 
            [
                'NoControl'=>'16270770',
                'Nombre'=>'Karen Gretchen',
                'APaterno'=>'Galvez',
                'AMaterno'=>'Laguna',
                'Carrera'=>'Sistemas Computacionales',
                'Campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'PlanDeEstudios'=>'1',
                'email'=>'gretchengalvezlaguna@hotmail.com',
                'Telefono'=>'9614553797',
                'password' => bcrypt('prueba123'),
            ], 
            [
                'NoControl'=>'17270172',
                'Nombre'=>'Victor Daniel',
                'APaterno'=>'Solano',
                'AMaterno'=>'Hernandez',
                'Carrera'=>'Sistemas Computacionales',
                'Campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'PlanDeEstudios'=>'1',
                'email'=>'victor_1996_darojo@hotmail.com',
                'Telefono'=>'9612284856',
                'password' => bcrypt('prueba123'),
            ], 
            [
                'NoControl'=>'16270745',
                'Nombre'=>'Jose Manuel',
                'APaterno'=>'Castellanos',
                'AMaterno'=>'Marroquin',
                'Carrera'=>'Sistemas Computacionales',
                'Campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'PlanDeEstudios'=>'1',
                'email'=>'josecastmarroquin@gmail.com',
                'Telefono'=>'9612086374',
                'password' => bcrypt('prueba123'),
            ], 
            [
                'NoControl'=>'17270832',
                'Nombre'=>'Daniel de Jesus',
                'APaterno'=>'Angel',
                'AMaterno'=>'Montes',
                'Carrera'=>'Electrica',
                'Campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'PlanDeEstudios'=>'1',
                'email'=>'danielmontes652@gmail.com',
                'Telefono'=>'9611175328',
                'password' => bcrypt('prueba123'),
            ], 
            [
                'NoControl'=>'14270782 ',
                'Nombre'=>'Einer Alejandro',
                'APaterno'=>'Lara',
                'AMaterno'=>'Aguilar',
                'Carrera'=>'Mecanica',
                'Campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'PlanDeEstudios'=>'1',
                'email'=>'L14270782@tuxtla.tecnm.mx',
                'Telefono'=>'9613138152',
                'password' => bcrypt('prueba123'),
            ], 
            [
                'NoControl'=>'17271050',
                'Nombre'=>'Jeziel Adonai',
                'APaterno'=>'Penagos',
                'AMaterno'=>'Suarez',
                'Carrera'=>'Mecánica',
                'Campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'PlanDeEstudios'=>'1',
                'email'=>'L17271050@tuxtla.tecnm.mx',
                'Telefono'=>'9613649868',
                'password' => bcrypt('prueba123'),
            ], 
            [
                'NoControl'=>'16270786',
                'Nombre'=>'Eugenia Abelina',
                'APaterno'=>'Jimenez',
                'AMaterno'=>'Aguilar',
                'Carrera'=>'Sistemas Computacionales',
                'Campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'PlanDeEstudios'=>'1',
                'email'=>'eugeniaabelinaj@gmail.com',
                'Telefono'=>'9611010278',
                'password' => bcrypt('prueba123'),
            ], 

            
        ]);
    }
}



