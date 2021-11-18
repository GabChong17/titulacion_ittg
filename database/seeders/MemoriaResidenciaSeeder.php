<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemoriaResidenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('MemoriaResidencia')->insert([
            [
                'Nombre'=>'Memoria de residencia profesional',
                'requisito1'=>'Objetivo',
                'requisito2'=>'Indice',
                'requisito3'=>'Bibliografia',
                'requisito4'=>'Carta del asesor',
                'Opciones_id'=>'10', 
                
            ],
        ]);
    }
}
