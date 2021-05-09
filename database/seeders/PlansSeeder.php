<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            [
                'id'=>'1',
                'Nombre'=>'Plan 93',
                'Opciones'=>'Plan 93',
                'created_at'=>NULL,
                'updated_at'=>NULL, 
            ], 
            [
                'id'=>'2',
                'Nombre'=>'Plan 2004',
                'Opciones'=>'Plan 2004',
                'created_at'=>NULL,
                'updated_at'=>NULL, 
            ],
        ]);
    }
}

/*INSERT INTO `plans` (`id`, `Nombre`, `created_at`, `updated_at`) VALUES
(1, 'Plan 93', Plan 93, NULL),
(2, 'Plan 2004', NULL, NULL);
*/