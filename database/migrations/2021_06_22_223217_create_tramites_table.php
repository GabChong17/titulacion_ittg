<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTramitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tramites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('requisitos_id')->nullable();
            $table->unsignedBigInteger('opciones_id')->nullable();
            $table->unsignedBigInteger('egresado_id')->nullable();
            $table->unsignedBigInteger('avales_id')->nullable();
            $table->unsignedBigInteger('jurado_id')->nullable();
            $table->string('opcion')->nullable();
            $table->string('estado')->nullable();
            $table->string('liberacion')->nullable();
            $table->string('fecha_recepcion')->nullable();
            $table->string('hora_recepcion')->nullable();
            $table->string('lugar_recepcion')->nullable();
            $table->string('Foto')->nullable();
          
            $table->foreign('requisitos_id')->references('id')->on('requisitos');
            $table->foreign('opciones_id')->references('id')->on('opciones');
            $table->foreign('egresado_id')->references('id')->on('users');
            $table->foreign('avales_id')->references('id')->on('aval');
            $table->foreign('jurado_id')->references('id')->on('jurado');
           
            $table->datetime('cita')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tramites');
    }
}
