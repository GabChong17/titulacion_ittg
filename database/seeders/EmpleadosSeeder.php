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
                'name'=>'Lizette Priscila',
                'a_paterno'=>'Espinoza',
                'a_materno'=>'Corzo',
                'departamento'=>'',
                'carrera'=>'Industrial',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'priscila.corzooo@gmail.com',
                'email_verified_at'=>null,
                'telefono'=>'9612325427',
                'password'=> bcrypt('prueba321'), 
            ],
            
            [
                'name'=>'Itzel Alejandra',
                'a_paterno'=>'Hernandez',
                'a_materno'=>'Cuevas',
                'departamento'=>'',
                'carrera'=>'Sistemas Computacionales',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'itzelhernandez367@gmail.com',
                'email_verified_at'=>null,
                'telefono'=>'9613184211',
                'password'=> bcrypt('prueba321'),
            ], 
            
            [
                'name'=>'Manuel Alejandro',
                'a_paterno'=>'Vazquez',
                'a_materno'=>'Molina',
                'departamento'=>'',
                'carrera'=>'Mecánica',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'manuel10881@hotmail.com',
                'email_verified_at'=>null,
                'telefono'=>'9613875821',
                'password'=> bcrypt('prueba321'),
            ],  
              
            [
                'name'=>'Jose Fernando',
                'a_paterno'=>'Perez',
                'a_materno'=>'Garcia',
                'departamento'=>'',
                'carrera'=>'Sistemas Computacionales',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'josefernandoperezgarcia98@gmail.com',
                'email_verified_at'=>null,
                'telefono'=>'9611652148',
                'password'=> bcrypt('prueba321'),
            ],      
        
            [
                'name'=>'Eliezer Berlain',
                'a_paterno'=>'Gomez',
                'a_materno'=>'Gomez',
                'departamento'=>'',
                'carrera'=>'Sistemas Computacionales',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'L17270141@tuxtla.tecnm.mx',
                'email_verified_at'=>null,
                'telefono'=>'9191336022',
                'password'=> bcrypt('prueba321'),
            ],   
            
            [
                'name'=>'Jorge',
                'a_paterno'=>'Lopez',
                'a_materno'=>'Gomez',
                'departamento'=>'',
                'carrera'=>'Sistemas Computacionales',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'jorfc@gmail.com',
                'email_verified_at'=>null,
                'telefono'=>'9611364489',
                'password'=> bcrypt('prueba321'),
            ],
         
            [
                'name'=>'Ramiro de Jesus',
                'a_paterno'=>'Balam',
                'a_materno'=>'Lopez',
                'departamento'=>'',
                'carrera'=>'Sistemas Computacionales',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'L16270739@tecnm.tutla.mx',
                'email_verified_at'=>null,
                'telefono'=>'9611229978',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'Rafael',
                'a_paterno'=>'Bolaños',
                'a_materno'=>'Cameras',
                'departamento'=>'',
                'carrera'=>'Sistemas Computacionales',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'L16270740@tuxtla.tecnm.mx',
                'email_verified_at'=>null,
                'telefono'=>'9614805253',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'America Rubi',
                'a_paterno'=>'Vazquez',
                'a_materno'=>'Hernandez',
                'departamento'=>'',
                'carrera'=>'Sistemas Computacionales',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'L16270848@tuxtla.tecnm.mx',
                'email_verified_at'=>null,
                'telefono'=>'5567917751',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'Manuel',
                'a_paterno'=>'Sanchez',
                'a_materno'=>'Rios',
                'departamento'=>'',
                'carrera'=>'',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'',
                'email_verified_at'=>null,
                'telefono'=>'',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'',
                'a_paterno'=>'Gustavo',
                'a_materno'=>'Solis',
                'departamento'=>'',
                'carrera'=>'',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'',
                'email_verified_at'=>null,
                'telefono'=>'',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'',
                'a_paterno'=>'',
                'a_materno'=>'',
                'departamento'=>'',
                'carrera'=>'',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'',
                'email_verified_at'=>null,
                'telefono'=>'',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'',
                'a_paterno'=>'',
                'a_materno'=>'',
                'departamento'=>'',
                'carrera'=>'',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'',
                'email_verified_at'=>null,
                'telefono'=>'',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'',
                'a_paterno'=>'',
                'a_materno'=>'',
                'departamento'=>'',
                'carrera'=>'',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'',
                'email_verified_at'=>null,
                'telefono'=>'',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'',
                'a_paterno'=>'',
                'a_materno'=>'',
                'departamento'=>'',
                'carrera'=>'',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'',
                'email_verified_at'=>null,
                'telefono'=>'',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'',
                'a_paterno'=>'',
                'a_materno'=>'',
                'departamento'=>'',
                'carrera'=>'',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'',
                'email_verified_at'=>null,
                'telefono'=>'',
                'password'=> bcrypt('prueba321'),
            ],
             
        ]);
    }
}

