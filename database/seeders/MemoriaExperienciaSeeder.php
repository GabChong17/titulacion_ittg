<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemoriaExperienciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('MemoriaExperiencia')->insert([
            [
                'Nombre'=>'Memoria por experiencia profesional',
                'requisito1'=>'Objetivo',
                'requisito2'=>'Indice',
                'requisito3'=>'Bibliografia',
                'requisito4'=>'Curriculum vitae',
                'requisito5'=>'Constancia',
                'requisito6'=>'Carta del asesor',
                'Opciones_id'=>'7', 
                
            ],
        ]);
    }
}
