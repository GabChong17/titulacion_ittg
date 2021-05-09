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
        DB::table('opcions')->insert([
            [
                'id'=>'4',
                'Planes_id'=>'1',
                'Nombre'=>'Tesis de 93',
                'Descripcion'=>'Trabajos que se deben desarrollar...',
                'created_at'=>null,
                'updated_at'=>null,                
            ], 
            [
                'id'=>'5',
                'Planes_id'=>'1',
                'Nombre'=>'Texto o prototipo 93',
                'Descripcion'=>'...',
                'created_at'=>null,
                'updated_at'=>null,                
            ], 
            [
                'id'=>'6',
                'Planes_id'=>'1',
                'Nombre'=>'proyecto 93',
                'Descripcion'=>'TRABAJOS....',
                'created_at'=>null,
                'updated_at'=>null,                
            ], 
            [
                'id'=>'7',
                'Planes_id'=>'1',
                'Nombre'=>'TESIS de 2004',
                'Descripcion'=>'TRABAJOS....',
                'created_at'=>null,
                'updated_at'=>null,                
            ], 
            [
                'id'=>'8',
                'Planes_id'=>'1',
                'Nombre'=>'PROYECTO 2004',
                'Descripcion'=>'...',
                'created_at'=>null,
                'updated_at'=>null,                
            ], 
            
            ]);
    }
}