<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EscolaridadPosgradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('EscolaridadPosgrado')->insert([
            [
                'Nombre'=>'Escolaridad por estudios de posgrado',
                'requisito1'=>'Constancia (40%)',
                'requisito2'=>'Plan de estudios',
                'requisito3'=>'Revoe',
                'Opciones_id'=>'9', 
                
            ],
        ]);
    }
}
