<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TesisProfesional2004Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TesisProfesional2004')->insert([
            [
                'Nombre'=>'Tesis Profesional',
                'requisito1'=>'Objetivo',
                'requisito2'=>'Indice',
                'requisito3'=>'Bibliografia',
                'Opciones_id'=>'11', 
                
            ],
        ]);
    }
}
