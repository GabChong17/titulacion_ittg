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
                'name'=>'Raul Armando',
                'a_paterno'=>'Gutierrez',
                'a_materno'=>'Sosa',
                'departamento'=>'Academia',
                'carrera'=>'Sistemas Computacionales',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'sosa_2345@gmail.com',
                'email_verified_at'=>null,
                'telefono'=>'1234567890',
                'password'=> bcrypt('prueba321'), 
            ],
            [
                'name'=>'',
                'a_paterno'=>'',
                'a_materno'=>'',
                'departamento'=>'',
                'carrera'=>'',
                'campus'=>'',
                'email'=>'',
                'email_verified_at'=>'',
                'telefono'=>'',
                'password'=> bcrypt('prueba321'),
            ],           
        ]);
    }
}
