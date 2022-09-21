<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElaboracionTextoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ElaboracionTexto')->insert([
            [
                'Nombre'=>'Elaboracion de texto o prototipo didactico',
                'requisito1'=>'Objetivo',
                'requisito2'=>'Indice',
                'requisito3'=>'Bibliografia',
                'Opciones_id'=>'2', 
                
            ],
        ]);
    }
}
