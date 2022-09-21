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
        DB::table('users')->insert([

        
            // admin
            [
                'name'=>'Luis Gabriel',
                'a_paterno'=>'Rincon',
                'a_materno'=>'Chong',
                'profesion'=> 'Ingeniero Sistemas Computacionales',
                'cedula'=> '16270821',
                'rol'=>'admin',
                'carrera'=>'Sistemas Computacionales',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'gabo.pro3@gmail.com',
                'email_verified_at'=>null,
                'estado'=>null,
                'telefono'=>'9612465121',
                'password'=> bcrypt('prueba321'), 
            ],
            [
                
                'name'=>'Mario ',
                'a_paterno'=>'Vazquez',
                'a_materno'=>'Garcia',
                'profesion'=> 'Ingeniero Sistemas Computacionales',
                'cedula'=> '1627',
                'rol' => 'admin',
                'carrera'=>'Sistemas Computacionales',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'mario@live.com',
                'email_verified_at'=>null,
                'estado'=>null,
                'telefono'=>'9611985948',
                'password'=> bcrypt('prueba123'),
            ],  
    
            // division
            [
                'name'=>'Lizette Priscila',
                'a_paterno'=>'Espinoza',
                'a_materno'=>'Corzo',
                'profesion'=> 'Ingeniero ',
                'cedula'=> '1627',
                'rol'=>'division',
                'carrera'=>'Industrial',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'division@tuxtla.tecnm.mx',
                'email_verified_at'=>null,
                'estado'=>null,
                'telefono'=>'9612325427',
                'password'=> bcrypt('prueba321'), 
            ],
            // jefatura
            
            // academia
            [
                'name'=>'Manuel Alejandro',
                'a_paterno'=>'Vazquez',
                'a_materno'=>'Molina',
                'profesion'=> 'Ingeniero ',
                'cedula'=> '1627',
                'rol'=>'academia',
                'carrera'=>'Mecanica',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'academia@tuxtla.tecnm.mx',
                'email_verified_at'=>null,
                'estado'=>null,
                'telefono'=>'9613875821',
                'password'=> bcrypt('prueba321'),
            ],
            // escolares
            [
                'name'=>'Jose Fernando',
                'a_paterno'=>'Perez',
                'a_materno'=>'Garcia',
                'profesion'=> 'Ingeniero ',
                'cedula'=> '1627',
                'rol'=>'escolares',
                'carrera'=>'Sistemas Computacionales',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'escolares@tuxtla.tecnm.mx',
                'email_verified_at'=>null,
                'estado'=>null,
                'telefono'=>'9611652148',
                'password'=> bcrypt('prueba321'),
            ],
           
            // asesor    
            [
                'name'=>'Eliezer Berlain',
                'a_paterno'=>'Gomez',
                'a_materno'=>'Gomez',
                'profesion'=> 'Ingeniero ',
                'cedula'=> '1627',
                'rol'=>'asesor',
                'carrera'=>'Electronica',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'L17270141@tuxtla.tecnm.mx',
                'email_verified_at'=>null,
                'estado'=>null,
                'telefono'=>'9191336022',
                'password'=> bcrypt('prueba321'),
            ],   
            [
                'name'=>'Carlos Daniel',
                'a_paterno'=>'Ordaz',
                'a_materno'=>'Lopez',
                'profesion'=> 'Ingeniero ',
                'cedula'=> '1627',
                'rol'=>'asesor',
                'carrera'=>'Industrial',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'Carlos.faquir114@gmail.com',
                'email_verified_at'=>null,
                'estado'=>null,
                'telefono'=>'9941078513',
                'password'=> bcrypt('prueba321'),
            ],            
            [
                'name'=>'Oscar Jose',
                'a_paterno'=>'Moreno',
                'a_materno'=>'García',
                'profesion'=> 'Ingeniero ',
                'cedula'=> '1627',
                'rol'=>'asesor',
                'carrera'=>'Bioquimica',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'morenogarcia.omg@gmail.com',
                'email_verified_at'=>null,
                'estado'=>null,
                'telefono'=>'9611344538',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'Diego',
                'a_paterno'=>'Alcaraz',
                'a_materno'=>'Zúñiga',
                'profesion'=> 'Ingeniero ',
                'cedula'=> '1627',
                'rol'=>'asesor',
                'carrera'=>'Gestion Empresarial',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'L17270697@tuxtla.tecnm.mx',
                'email_verified_at'=>null,
                'estado'=>null,
                'telefono'=>'9612413265',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'Itzel Alejandra',
                'a_paterno'=>'Hernandez',
                'a_materno'=>'Cuevas',
                'profesion'=> 'Ingeniero ',
                'cedula'=> '1627',
                'rol'=>'asesor',
                'carrera'=>'Sistemas Computacionales',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'itzelhernandez367@gmail.com',
                'email_verified_at'=>null,
                'estado'=>null,
                'telefono'=>'9613184211',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'Ramiro de Jesus',
                'a_paterno'=>'Balam',
                'a_materno'=>'Lopez',
                'profesion'=> 'Ingeniero ',
                'cedula'=> '1627',
                'rol'=>'asesor',
                'carrera'=>'Logistica',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'L16270739@tecnm.tutla.mx',
                'email_verified_at'=>null,
                'estado'=>null,
                'telefono'=>'9611229978',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'Bersain',
                'a_paterno'=>'Cordova',
                'a_materno'=>'Zebadua',
                'profesion'=> 'Ingeniero ',
                'cedula'=> '1627',
                'rol'=>'asesor',
                'carrera'=>'Quimica',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'bersaincord@gmail.com',
                'email_verified_at'=>null,
                'estado'=>null,
                'telefono'=>'9612464729',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'Luis Jhovanni',
                'a_paterno'=>'Gutierrez',
                'a_materno'=>'Perez',
                'profesion'=> 'Ingeniero ',
                'cedula'=> '1627',
                'rol'=>'asesor',
                'carrera'=>'Electrica',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'l16270779@tuxtla.tecnm.mx',
                'email_verified_at'=>null,
                'estado'=>null,
                'telefono'=>'9191278231',
                'password'=> bcrypt('prueba321'),
            ],
        ]);
    }
}

// División Escolar
//Jefatura Académica
//Academia
//Servicios Escolares
//Asesor
//Supervisor

//admin
//egresado

//division
//jefatura
//academia
//escolares
//asesor