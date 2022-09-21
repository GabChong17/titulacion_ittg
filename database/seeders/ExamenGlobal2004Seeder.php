<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamenGlobal2004Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('ExamenGlobal2004')->insert([
            [
                'Nombre'=>'Examen global por areas del conocimiento',
                'requisito1'=>'Constancia del examen CENEVAL',
                'Opciones_id'=>'13', 
                
            ],
        ]);
    }
}
