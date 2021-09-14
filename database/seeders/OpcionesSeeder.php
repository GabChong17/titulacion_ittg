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
            [
                'Nombre'=>'Tesis de 93',
                'Descripcion'=>'Trabajos que se deben desarrollar',     
                'Planes_id'=>'1',               
            ], 
            [
                'Nombre'=>'Texto o prototipo 93',
                'Descripcion'=>'...',
                'Planes_id'=>'1',                    
            ], 
            [
                'Nombre'=>'Proyecto 93',
                'Descripcion'=>'...',
                'Planes_id'=>'1',                    
            ], 
            [
                'Nombre'=>'Tesis de 2004',
                'Descripcion'=>'Trabajos',
                'Planes_id'=>'2',                    
            ], 
            [
                'Nombre'=>'Texto o prototipo 2004',
                'Descripcion'=>'prototipo',
                'Planes_id'=>'2',                    
            ], 
            [
                'Nombre'=>'Proyecto 2004',
                'Descripcion'=>'...',
                'Planes_id'=>'2',                    
            ], 
        ]);
    }
}
