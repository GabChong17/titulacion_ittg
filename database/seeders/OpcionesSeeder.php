<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpcionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opciones')->insert([
            //plan 93
            [//1
                'Nombre'=>'Tesis profesional',
                'Descripcion'=>'Trabajos que se deben desarrollar',     
                'Planes_id'=>'1',
                'requisito1'=>'Objetivo',
                'requisito2'=>'Indice',
                'requisito3'=>'Bibliografia',
                'requisito4'=>NULL,
                'requisito5'=>NULL,
                'requisito6'=>NULL,
               

            ], 
            [//2
                'Nombre'=>'Elaboracion de texto o prototipo didactico',
                'Descripcion'=>'...',
                'Planes_id'=>'1',  
                'requisito1'=>'Objetivo',
                'requisito2'=>'Indice',
                'requisito3'=>'Bibliografia',
                'requisito4'=>NULL,
                'requisito5'=>NULL,
                'requisito6'=>NULL,                  
            ], 
            [//3
                'Nombre'=>'Proyecto de investigacion',
                'Descripcion'=>'...',
                'Planes_id'=>'1',   
                'requisito1'=>'Objetivo',
                'requisito2'=>'Indice',
                'requisito3'=>'Bibliografia',
                'requisito4'=>'Carta del asesor',
                'requisito5'=>NULL,
                'requisito6'=>NULL,                
            ], 
            [//4
                'Nombre'=>'Diseño o rediseño de equipo, aparato o maquina',
                'Descripcion'=>'...',
                'Planes_id'=>'1',   
                'requisito1'=>'Objetivo',
                'requisito2'=>'Indice',
                'requisito3'=>'Bibliografia',
                'requisito4'=>NULL,
                'requisito5'=>NULL,
                'requisito6'=>NULL,               
            ], 
            [//5
                'Nombre'=>'Curso especial de titulacion',
                'Descripcion'=>'...',
                'Planes_id'=>'1',  
                'requisito1'=>'Objetivo',
                'requisito2'=>NULL,   
                'requisito3'=>NULL,   
                'requisito4'=>NULL,   
                'requisito5'=>NULL,   
                'requisito6'=>NULL,                    
            ],
            [//6
                'Nombre'=>'Examen global por areas del conocimiento',
                'Descripcion'=>'...',
                'Planes_id'=>'1',  
                'requisito1'=>'Ceneval',
                'requisito2'=>NULL,   
                'requisito3'=>NULL,   
                'requisito4'=>NULL,   
                'requisito5'=>NULL,   
                'requisito6'=>NULL,                 
            ],
            [//7
                'Nombre'=>'Memoria por experiencia profesional',
                'Descripcion'=>'...',
                'Planes_id'=>'1', 
                'requisito1'=>'Objetivo',
                'requisito2'=>'Indice',
                'requisito3'=>'Bibliografia',
                'requisito4'=>'CV',
                'requisito5'=>'Constancia',
                'requisito6'=>'Carta del asesor',               
            ],
            [//8
                'Nombre'=>'Escolaridad por promedio',
                'Descripcion'=>'...',
                'Planes_id'=>'1', 
                'requisito1'=>'Promedio',
                'requisito2'=>'Solicitud llenada',
                'requisito3'=>'Certificado',
                'requisito4'=>NULL,
                'requisito5'=>NULL,
                'requisito6'=>NULL,                   
            ],
            [//9
                'Nombre'=>'Escolaridad por estudios de posgrado',
                'Descripcion'=>'...',
                'Planes_id'=>'1', 
                'requisito1'=>'Constancia (40%)',
                'requisito2'=>'Plan de estudios',
                'requisito3'=>'Revoe',
                'requisito4'=>NULL,
                'requisito5'=>NULL,
                'requisito6'=>NULL,                   
            ],
            [//10
                'Nombre'=>'Memoria de residencia profesional',
                'Descripcion'=>'...',
                'Planes_id'=>'1', 
                'requisito1'=>'Objetivo',
                'requisito2'=>'Indice',
                'requisito3'=>'Bibliografia',
                'requisito4'=>'Carta del asesor',
                'requisito5'=>'Triptico',
                'requisito6'=>NULL,           
            ],
            //plan 2004
            [//11
                'Nombre'=>'Tesis profesional',
                'Descripcion'=>'Trabajos',
                'Planes_id'=>'2',  
                'requisito1'=>'Objetivo',
                'requisito2'=>'Indice',
                'requisito3'=>'Bibliografia',
                'requisito4'=>NULL,
                'requisito5'=>NULL,
                'requisito6'=>NULL,                
            ], 
            [//12
                'Nombre'=>'Proyecto de investigacion',
                'Descripcion'=>'prototipo',
                'Planes_id'=>'2', 
                'requisito1'=>'Objetivo',
                'requisito2'=>'Indice',
                'requisito3'=>'Bibliografia',
                'requisito4'=>'Carta del asesor',
                'requisito5'=>NULL,
                'requisito6'=>NULL,                         
            ], 
            [//13
                'Nombre'=>'Examen global por areas del conocimiento',
                'Descripcion'=>'...',
                'Planes_id'=>'2',   
                'requisito1'=>'Ceneval',
                'requisito2'=>NULL,   
                'requisito3'=>NULL,   
                'requisito4'=>NULL,   
                'requisito5'=>NULL,   
                'requisito6'=>NULL,                  
            ], 
            [//14
                'Nombre'=>'Escolaridad por promedio',
                'Descripcion'=>'...',
                'Planes_id'=>'2', 
                'requisito1'=>'Promedio',
                'requisito2'=>'Solicitud llenada',
                'requisito3'=>'Certificado',
                'requisito4'=>NULL,
                'requisito5'=>NULL,
                'requisito6'=>NULL,                    
            ], 
            [//15
                'Nombre'=>'Memoria de residencia profesional',
                'Descripcion'=>'...',
                'Planes_id'=>'2',
                'requisito1'=>'Objetivo',
                'requisito2'=>'Indice',
                'requisito3'=>'Bibliografia',
                'requisito4'=>'Carta del asesor',
                'requisito5'=>'Triptico',
                'requisito6'=>NULL,                     
            ], 
        ]);
    }
}
