<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequisitososSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('requisitosos')->insert([
            //plan 93
            //Tesis profesional
            [
                'Planes_id'=>'1',
                'Nombre'=>'Objetivo',
                'Opciones_id'=>'1',
            ], 
            [
                'Planes_id'=>'1',
                'Nombre'=>'Indice',
                'Opciones_id'=>'1',
            ], 
            [
                'Planes_id'=>'1',
                'Nombre'=>'Bibliografia',
                'Opciones_id'=>'1',
            ], 
            //Elaboracion de texto o prototipo didactico
            [
                'Planes_id'=>'1',
                'Nombre'=>'Objetivo',
                'Opciones_id'=>'2',
            ], 
            [
                'Planes_id'=>'1',
                'Nombre'=>'Indice',
                'Opciones_id'=>'2',
            ], 
            [
                'Planes_id'=>'1',
                'Nombre'=>'Bibliografia',
                'Opciones_id'=>'2',
            ], 
            //Proyecto de investigacion
            [
                'Planes_id'=>'1',
                'Nombre'=>'Objetivo',
                'Opciones_id'=>'3',
            ], 
            [
                'Planes_id'=>'1',
                'Nombre'=>'Indice',
                'Opciones_id'=>'3',
            ], 
            [
                'Planes_id'=>'1',
                'Nombre'=>'Bibliografia',
                'Opciones_id'=>'3',
            ], 
            [
                'Planes_id'=>'1',
                'Nombre'=>'Carta del asesor',
                'Opciones_id'=>'3',
            ], 
            //Diseño o rediseño de equipo, aparato o maquina
            [
                'Planes_id'=>'1',
                'Nombre'=>'Objetivo',
                'Opciones_id'=>'4',
            ], 
            [
                'Planes_id'=>'1',
                'Nombre'=>'Indice',
                'Opciones_id'=>'4',
            ], 
            [
                'Planes_id'=>'1',
                'Nombre'=>'Bibliografia',
                'Opciones_id'=>'4',
            ], 
            //Curso especial de titulacion
            [
                'Planes_id'=>'1',
                'Nombre'=>'Objetivo',
                'Opciones_id'=>'5',
            ], 
            //Examen global por areas del conocimiento
             [
                'Planes_id'=>'1',
                'Nombre'=>'Ceneval',
                'Opciones_id'=>'6',
            ], 
            //Memoria por experiencia profesional
            [
                'Planes_id'=>'1',
                'Nombre'=>'Objetivo',
                'Opciones_id'=>'7',
            ], 
            [
                'Planes_id'=>'1',
                'Nombre'=>'Indice',
                'Opciones_id'=>'7',
            ], 
            [
                'Planes_id'=>'1',
                'Nombre'=>'Bibliografia',
                'Opciones_id'=>'7',
            ], 
            [
                'Planes_id'=>'1',
                'Nombre'=>'CV',
                'Opciones_id'=>'7',
            ], 
            [
                'Planes_id'=>'1',
                'Nombre'=>'Constancia',
                'Opciones_id'=>'7',
            ], 
            [
                'Planes_id'=>'1',
                'Nombre'=>'Carta del asesor',
                'Opciones_id'=>'7',
            ], 
            //Escolaridad por promedio
            [
                'Planes_id'=>'1',
                'Nombre'=>'Promedio',
                'Opciones_id'=>'8',
            ], 
            [
                'Planes_id'=>'1',
                'Nombre'=>'Solicitud llenada',
                'Opciones_id'=>'8',
            ], 
            [
                'Planes_id'=>'1',
                'Nombre'=>'Certificado',
                'Opciones_id'=>'8',
            ], 
            //Escolaridad por estudios de posgrado
            [
                'Planes_id'=>'1',
                'Nombre'=>'Constancia (40%)',
                'Opciones_id'=>'9',
            ], 
            [
                'Planes_id'=>'1',
                'Nombre'=>'Plan de estudios',
                'Opciones_id'=>'9',
            ], 
            [
                'Planes_id'=>'1',
                'Nombre'=>'Revoe',
                'Opciones_id'=>'9',
            ], 
            //Memoria de residencia profesional
            [
                'Planes_id'=>'1',
                'Nombre'=>'Objetivo',
                'Opciones_id'=>'10',
            ], 
            [
                'Planes_id'=>'1',
                'Nombre'=>'Indice',
                'Opciones_id'=>'10',
            ], 
            [
                'Planes_id'=>'1',
                'Nombre'=>'Bibliografia',
                'Opciones_id'=>'10',
            ], 
            [
                'Planes_id'=>'1',
                'Nombre'=>'Carta del asesor',
                'Opciones_id'=>'10',
            ], 
            [
                'Planes_id'=>'1',
                'Nombre'=>'Triptico',
                'Opciones_id'=>'10',
            ], 

            //plan 2004
            //Tesis profesional
             [
                'Planes_id'=>'2',
                'Nombre'=>'Objetivo',
                'Opciones_id'=>'11',
            ], 
            [
                'Planes_id'=>'2',
                'Nombre'=>'Indice',
                'Opciones_id'=>'11',
            ], 
            [
                'Planes_id'=>'2',
                'Nombre'=>'Bibliografia',
                'Opciones_id'=>'11',
            ],
            //Proyecto de investigacion
            [
                'Planes_id'=>'2',
                'Nombre'=>'Objetivo',
                'Opciones_id'=>'12',
            ], 
            [
                'Planes_id'=>'2',
                'Nombre'=>'Indice',
                'Opciones_id'=>'12',
            ], 
            [
                'Planes_id'=>'2',
                'Nombre'=>'Bibliografia',
                'Opciones_id'=>'12',
            ],
            [
                'Planes_id'=>'2',
                'Nombre'=>'Carta del asesor',
                'Opciones_id'=>'12',
            ],
            //Examen global por areas del conocimiento
            [
                'Planes_id'=>'2',
                'Nombre'=>'Ceneval',
                'Opciones_id'=>'13',
            ], 
            //Escolaridad por promedio
            [
                'Planes_id'=>'2',
                'Nombre'=>'Promedio',
                'Opciones_id'=>'14',
            ], 
            [
                'Planes_id'=>'2',
                'Nombre'=>'Solicitud llenada',
                'Opciones_id'=>'14',
            ], 
            [
                'Planes_id'=>'2',
                'Nombre'=>'Certificado',
                'Opciones_id'=>'14',
            ],              
            //Memoria de residencia profesional
            [
                'Planes_id'=>'2',
                'Nombre'=>'Objetivo',
                'Opciones_id'=>'15',
            ], 
            [
                'Planes_id'=>'2',
                'Nombre'=>'Indice',
                'Opciones_id'=>'15',
            ], 
            [
                'Planes_id'=>'2',
                'Nombre'=>'Bibliografia',
                'Opciones_id'=>'15',
            ],
            [
                'Planes_id'=>'2',
                'Nombre'=>'Carta del asesor',
                'Opciones_id'=>'15',
            ],
            [
                'Planes_id'=>'2',
                'Nombre'=>'Triptico',
                'Opciones_id'=>'15',
            ], 
        ]);
    }
}
