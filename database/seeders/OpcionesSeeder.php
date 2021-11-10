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
            ], 
            [//2
                'Nombre'=>'Elaboracion de texto o prototipo didactico',
                'Descripcion'=>'...',
                'Planes_id'=>'1',                    
            ], 
            [//3
                'Nombre'=>'Proyecto de investigacion',
                'Descripcion'=>'...',
                'Planes_id'=>'1',                    
            ], 
            [//4
                'Nombre'=>'Diseño o rediseño de equipo, aparato o maquina',
                'Descripcion'=>'...',
                'Planes_id'=>'1',                    
            ], 
            [//5
                'Nombre'=>'Curso especial de titulacion',
                'Descripcion'=>'...',
                'Planes_id'=>'1',                    
            ],
            [//6
                'Nombre'=>'Examen global por areas del conocimiento',
                'Descripcion'=>'...',
                'Planes_id'=>'1',                    
            ],
            [//7
                'Nombre'=>'Memoria por experiencia profesional',
                'Descripcion'=>'...',
                'Planes_id'=>'1',                    
            ],
            [//8
                'Nombre'=>'Escolaridad por promedio',
                'Descripcion'=>'...',
                'Planes_id'=>'1',                    
            ],
            [//9
                'Nombre'=>'Escolaridad por estudios de posgrado',
                'Descripcion'=>'...',
                'Planes_id'=>'1',                    
            ],
            [//10
                'Nombre'=>'Memoria de residencia profesional',
                'Descripcion'=>'...',
                'Planes_id'=>'1',                    
            ],
            //plan 2004
            [//11
                'Nombre'=>'Tesis profesional',
                'Descripcion'=>'Trabajos',
                'Planes_id'=>'2',                    
            ], 
            [//12
                'Nombre'=>'Proyecto de investigacion',
                'Descripcion'=>'prototipo',
                'Planes_id'=>'2',                    
            ], 
            [//13
                'Nombre'=>'Examen global por areas del conocimiento',
                'Descripcion'=>'...',
                'Planes_id'=>'2',                    
            ], 
            [//14
                'Nombre'=>'Escolaridad por promedio',
                'Descripcion'=>'...',
                'Planes_id'=>'2',                    
            ], 
            [//15
                'Nombre'=>'Memoria de residencia profesional',
                'Descripcion'=>'...',
                'Planes_id'=>'2',                    
            ], 
        ]);
    }
}
