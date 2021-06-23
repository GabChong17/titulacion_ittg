<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planes')->insert([
            [
                'id'=>'1',
                'Nombre'=>'Plan 93',
                
            ],
            [
                'id'=>'2',
                'Nombre'=>'Plan 2004',
                
            ],
        ]);
    }
}
