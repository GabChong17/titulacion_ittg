<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opciones', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Descripcion');
            $table->string('requisito1')->nullable();
            $table->string('requisito2')->nullable();
            $table->string('requisito3')->nullable();
            $table->string('requisito4')->nullable();
            $table->string('requisito5')->nullable();
            $table->string('requisito6')->nullable();
            $table->unsignedBigInteger('Planes_id');
            $table->foreign('Planes_id')->references('id')->on('planes');
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
        Schema::dropIfExists('opciones');
    }
}
