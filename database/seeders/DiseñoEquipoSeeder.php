<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiseñoEquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DiseñoEquipo')->insert([
            [
                'Nombre'=>'Diseño o rediseño de equipo, aparato o maquina',
                'requisito1'=>'Objetivo',
                'requisito2'=>'Indice',
                'requisito3'=>'Bibliografia',
                'Opciones_id'=>'4', 
                
            ],
        ]);
    }
}
