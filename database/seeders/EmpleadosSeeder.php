<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('empleados')->insert([
            [
                'Nombre'=>'Lizette Priscila',
                'APaterno'=>'Espinoza',
                'AMaterno'=>'Corzo',
                'email'=>'priscila.corzooo@gmail.com',
                'Foto'=>'nohay.jpg',
                'Telefono'=>'9612325427',
                'password' => bcrypt('prueba321'),
            ], 
            [
                'Nombre'=>'Itzel Alejandra',
                'APaterno'=>'Hernandez',
                'AMaterno'=>'Cuevas',
                'email'=>'itzelhernandez367@gmail.com',
                'Foto'=>'nohay.jpg',
                'Telefono'=>'9613184211',
                'password' => bcrypt('prueba321'),
            ],
            [
                'Nombre'=>'Manuel Alejandro',
                'APaterno'=>'Vazquez',
                'AMaterno'=>'Molina',
                'email'=>'manuel10881@hotmail.com',
                'Foto'=>'nohay.jpg',
                'Telefono'=>'9613875821',
                'password' => bcrypt('prueba321'),
            ],
            [
                'Nombre'=>'Jose Fernando',
                'APaterno'=>'Perez',
                'AMaterno'=>'Garcia',
                'email'=>'josefernandoperezgarcia98@gmail.com',
                'Foto'=>'nohay.jpg',
                'Telefono'=>'9611652148',
                'password' => bcrypt('prueba321'),
            ],
            [
                'Nombre'=>'Eliezer Berlain',
                'APaterno'=>'Gomez',
                'AMaterno'=>'Gomez',
                'email'=>'L17270141@tuxtla.tecnm.mx',
                'Foto'=>'nohay.jpg',
                'Telefono'=>'9191336022',
                'password' => bcrypt('prueba321'),
            ],
            [
                'Nombre'=>'Jorge',
                'APaterno'=>'Lopez',
                'AMaterno'=>'Gomez',
                'email'=>'jorfc.-@gmail.com',
                'Foto'=>'nohay.jpg',
                'Telefono'=>'9611364489',
                'password' => bcrypt('prueba321'),
            ],
            [
                'Nombre'=>'Ramiro de Jesus',
                'APaterno'=>'Balam',
                'AMaterno'=>'Lopez',
                'email'=>'L16270739@tecnm.tutla.mx',
                'Foto'=>'nohay.jpg',
                'Telefono'=>'9611229978',
                'password' => bcrypt('prueba321'),
            ],
            
        ]);
    }
}