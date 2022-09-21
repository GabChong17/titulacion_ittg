<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EscolaridadPromedioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('EscolaridadPromedio')->insert([
            [
                'Nombre'=>'Escolaridad por promedio',
                'requisito1'=>'Promedio',
                'requisito2'=>'Solicitud llenada',
                'requisito3'=>'Certificado',
                'Opciones_id'=>'8', 
                
            ],
        ]);
    }
}
