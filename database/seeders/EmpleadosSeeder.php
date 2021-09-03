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
                'departamento'=>'division',
                'roles'=>'division',
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
                'departamento'=>'jefatura',
                'roles'=>'jefatura',
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
                'departamento'=>'academia',
                'roles'=>'academia',
                'carrera'=>'Mecanica',
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
                'departamento'=>'escolares',
                'roles'=>'escolares',
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
                'departamento'=>'asesor',
                'roles'=>'asesor',
                'carrera'=>'Electronica',
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
                'departamento'=>'division',
                'roles'=>'division',
                'carrera'=>'Bioquimica',
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
                'departamento'=>'jefatura',
                'roles'=>'jefatura',
                'carrera'=>'Logistica',
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
                'departamento'=>'academia',
                'roles'=>'academia',
                'carrera'=>'Quimica',
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
                'departamento'=>'escolares',
                'roles'=>'escolares',
                'carrera'=>'Sistemas Computacionales',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'L16270848@tuxtla.tecnm.mx',
                'email_verified_at'=>null,
                'telefono'=>'5567917751',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'Oliver Cedric',
                'a_paterno'=>'Garcia',
                'a_materno'=>'Sanchez',
                'departamento'=>'division',
                'roles'=>'division',
                'carrera'=>'Electrica',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'Olivercedric2@gmail.com ',
                'email_verified_at'=>null,
                'telefono'=>'9612816275',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'Bersain',
                'a_paterno'=>'Cordova',
                'a_materno'=>'Zebadua',
                'departamento'=>'jefatura',
                'roles'=>'jefatura',
                'carrera'=>'Quimica',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'bersaincord@gmail.com',
                'email_verified_at'=>null,
                'telefono'=>'9612464729',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'Sergio Fabián',
                'a_paterno'=>'Flores',
                'a_materno'=>'Velasco',
                'departamento'=>'academia',
                'roles'=>'academia',
                'carrera'=>'Logistica',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'serfave9725@hotmail.com',
                'email_verified_at'=>null,
                'telefono'=>'9611090903',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'Paulina Briseyda ',
                'a_paterno'=>'Pérez',
                'a_materno'=>'Avendaño ',
                'departamento'=>'escolares',
                'roles'=>'escolares',
                'carrera'=>'Gestion Empresarial',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'brizz5010@gmail.com ',
                'email_verified_at'=>null,
                'telefono'=>'9612314601',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'Carlos Daniel',
                'a_paterno'=>'Ordaz',
                'a_materno'=>'Lopez',
                'departamento'=>'asesor',
                'roles'=>'asesor',
                'carrera'=>'Industrial',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'Carlos.faquir114@gmail.com',
                'email_verified_at'=>null,
                'telefono'=>'9941078513',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'Jose Luis',
                'a_paterno'=>'Lopez',
                'a_materno'=>'Lievano',
                'departamento'=>'division',
                'roles'=>'division',
                'carrera'=>'Mecanica',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'lievanoluis23@gmail.com',
                'email_verified_at'=>null,
                'telefono'=>'9613597974',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'Luis Jhovanni',
                'a_paterno'=>'Gutierrez',
                'a_materno'=>'Perez',
                'departamento'=>'jefatura',
                'roles'=>'jefatura',
                'carrera'=>'Electrica',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'l16270779@tuxtla.tecnm.mx',
                'email_verified_at'=>null,
                'telefono'=>'9191278231',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'Fátima Guadalupe',
                'a_paterno'=>'Mendoza',
                'a_materno'=>'Silias',
                'departamento'=>'academia',
                'roles'=>'academia',
                'carrera'=>'Electronica',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'fatima.silias97@gmail.com',
                'email_verified_at'=>null,
                'telefono'=>'9613353400',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'José Francisco',
                'a_paterno'=>'Cruz',
                'a_materno'=>'Anaya',
                'departamento'=>'escolares',
                'roles'=>'escolares',
                'carrera'=>'Quimica',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'canayajf@gmail.com',
                'email_verified_at'=>null,
                'telefono'=>'9611687439',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'Oscar Jose',
                'a_paterno'=>'Moreno',
                'a_materno'=>'García',
                'departamento'=>'asesor',
                'roles'=>'asesor',
                'carrera'=>'Bioquimica',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'morenogarcia.omg@gmail.com',
                'email_verified_at'=>null,
                'telefono'=>'9611344538',
                'password'=> bcrypt('prueba321'),
            ],
            [
                'name'=>'Diego',
                'a_paterno'=>'Alcaraz',
                'a_materno'=>'Zúñiga',
                'departamento'=>'asesor',
                'roles'=>'asesor',
                'carrera'=>'Gestion Empresarial',
                'campus'=>'Instituto Tecnologico de Tuxtla Gutierrez',
                'email'=>'L17270697@tuxtla.tecnm.mx',
                'email_verified_at'=>null,
                'telefono'=>'9612413265',
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