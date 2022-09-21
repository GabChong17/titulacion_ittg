<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(EgresadosSeeder::class);
        $this->call(EmpleadosSeeder::class);
        $this->call(PlanesSeeder::class);
        $this->call(OpcionesSeeder::class);
        $this->call(RequisitososSeeder::class);
        // $this->call(CursoEspecialSeeder::class);
        // $this->call(DiseñoEquipoSeeder::class);
        // $this->call(ElaboracionTextoSeeder::class);
        // $this->call(EscolaridadPosgradoSeeder::class);
        // $this->call(EscolaridadPromedio2004Seeder::class);
        // $this->call(EscolaridadPromedioSeeder::class);
        // $this->call(ExamenGlobal2004Seeder::class);
        // $this->call(ExamenGlobalSeeder::class);
        // $this->call(MemoriaExperienciaSeeder::class);
        // $this->call(MemoriaResidencia2004Seeder::class);
        // $this->call(MemoriaResidenciaSeeder::class);
        // $this->call(ProyectoInvestigacion2004Seeder::class);
        // $this->call(ProyectoInvestigacionSeeder::class);
        // $this->call(TesisProfesional2004Seeder::class);
        // $this->call(TesisProfesionalSeeder::class);
        // $this->call(TesisProfesionalSeeder::class);
        
        

        
    }
}
