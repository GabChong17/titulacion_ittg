<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('NoControl',20);
            $table->string('name',20);
            $table->string('a_paterno',20);
            $table->string('a_materno',20);
            $table->string('carrera');
            $table->string('campus');
            $table->string('planDeestudios');
            $table->string('tema');
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('telefono');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->enum('rol', ['admin','egresado','division','jefatura','academia','escolares','asesor'])->default('egresado');
            $table->enum('estado', ['Tramite_Iniciado','Cita_Agendada','Revison_Escolares','Solicitud_De_Asesores','Asesores_Asignados','Asesoria_Liberada','Docuementos_Revisados', 'No_Incoveniencia', 'Solicitud_Jurado', 'Jurado_Asignado','Acto_Agendado','Tramite_Finalizado'])->default('Tramite_Iniciado');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
