<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formatos',  function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('egresado_id')->nullable();
            $table->string('documentoInicio1')->nullable();
            $table->string('documentoInicio2')->nullable();
            $table->string('documentoInicio3')->nullable();
            $table->string('documentoInicio4')->nullable();

            $table->foreign('egresado_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formatos');
    }
}
