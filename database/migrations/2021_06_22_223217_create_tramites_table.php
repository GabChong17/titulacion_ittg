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
            $table->unsignedBigInteger('requisitos_id');
            $table->unsignedBigInteger('opciones_id');
            $table->unsignedBigInteger('egresado_id');
            $table->unsignedBigInteger('avales_id');
            $table->unsignedBigInteger('jurado_id');
            $table->string('opcion');
            $table->string('estado');
            $table->string('liberacion');
            $table->string('fecha_recepcion');
            $table->string('hora_recepcion');
            $table->string('lugar_recepcion');
            $table->string('Foto');
          
            $table->foreign('requisitos_id')->references('id')->on('requisitos');
            $table->foreign('opciones_id')->references('id')->on('opciones');
            $table->foreign('egresado_id')->references('id')->on('egresados');
            $table->foreign('avales_id')->references('id')->on('aval');
            $table->foreign('jurado_id')->references('id')->on('jurado');
           
            $table->datetime('cita');
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
