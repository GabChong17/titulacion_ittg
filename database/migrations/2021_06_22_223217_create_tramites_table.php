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
            $table->string('InicioTramite')->nullable();
            $table->string('proceso_exitoso')->nullable();
          
            $table->foreign('requisitos_id')->references('id')->on('requisitos');
            $table->foreign('opciones_id')->references('id')->on('opciones');
            $table->foreign('egresado_id')->references('id')->on('users');
            $table->foreign('avales_id')->references('id')->on('aval');
            //$table->foreign('jurado_id')->references('id')->on('jurados');
           
            $table->datetime('cita')->nullable();
            $table->string('tema')->nullable();
            $table->string('recepcion')->nullable();
            $table->datetime('acto_recepcion')->nullable();
            $table->datetime('cita_servicios')->nullable();
            // $table->string('requisito1')->nullable();
            // $table->string('requisito2')->nullable();
            // $table->string('requisito3')->nullable();
            // $table->string('requisito4')->nullable();
            // $table->string('requisito5')->nullable();
            // $table->string('requisito6')->nullable();
            $table->string('boucher')->nullable();
            $table->string('protocolo')->nullable();
            $table->string('documentoInicio1')->nullable();
            $table->string('documentoInicio2')->nullable();
            $table->string('documentoInicio3')->nullable();
            $table->string('documentoInicio4')->nullable();
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
