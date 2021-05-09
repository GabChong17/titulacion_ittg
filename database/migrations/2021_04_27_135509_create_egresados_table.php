<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEgresadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresados', function (Blueprint $table) {
            $table->id();
            $table->string('NoControl');
            $table->string('Nombre');
            $table->string('APaterno');
            $table->string('AMaterno');
            $table->string('Carrera');
            $table->string('Campus');
            $table->unsignedBigInteger('PlanDeEstudios');
            $table->string('email');
            $table->string('Telefono');
            $table->string('password');
            $table->timestamps();

            $table->foreign('PlanDeEstudios')->references('id')->on('plans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('egresados');
    }
}

           