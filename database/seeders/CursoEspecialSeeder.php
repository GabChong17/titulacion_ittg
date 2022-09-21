<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoEspecialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('CursoEspecial')->insert([
            [
                'Nombre'=>'Curso especial de titulacion',
                'requisito1'=>'Objetivo',
                'Opciones_id'=>'5', 
                
            ],
        ]);
    }
}
