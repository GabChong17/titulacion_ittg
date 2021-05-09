<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PlansSeeder::class);
        $this->call(OpcionesSeeder::class);
        $this->call(RequisitosSeeder::class);
        $this->call(EgresadosSeeder::class);
        $this->call(EmpleadosSeeder::class);
    }
}
