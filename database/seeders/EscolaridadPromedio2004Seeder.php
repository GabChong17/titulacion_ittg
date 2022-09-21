<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EscolaridadPromedio2004Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('EscolaridadPromedio2004')->insert([
            [
                'Nombre'=>'Escolaridad por promedio',
                'requisito1'=>'Promedio',
                'requisito2'=>'Solicitud llenada',
                'requisito3'=>'Certificado',
                'Opciones_id'=>'14', 
                
            ],
        ]);
    }
}
