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
            $table->string('NoControl',20)->nullable();
            $table->string('name',20);
            $table->string('a_paterno',20);
            $table->string('a_materno',20);
            $table->string('carrera');
            $table->string('campus');
            $table->string('planDeestudios')->nullable();
            $table->string('tema')->nullable();
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('telefono');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->enum('rol', ['admin','egresado','division','jefatura','academia','escolares','asesor'])->default('egresado');
            $table->enum('estado', ['Tramite_Iniciado','Cita_Agendada','Solicitud_De_Asesores','Asesores_Asignados','Asesoria_Liberada','Revision_Escolares','Documentos_Revisados','No_Incoveniencia','Solicitud_Jurado','Jurado_Asignado','Acto_Agendado','Tramite_Finalizado'])->nullable();
           
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
