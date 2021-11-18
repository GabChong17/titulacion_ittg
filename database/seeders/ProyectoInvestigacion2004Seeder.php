<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProyectoInvestigacion2004Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ProyectoInvestigacion2004')->insert([
            [
                'Nombre'=>'Proyecto de investigacion',
                'requisito1'=>'Objetivo',
                'requisito2'=>'Indice',
                'requisito3'=>'Bibliografia',
                'requisito4'=>'Carta del asesor',
                'Opciones_id'=>'12', 
                
            ],
        ]);
    }
}
