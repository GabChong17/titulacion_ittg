<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CursoEspecialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CursoEspecial', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('requisito1');
            $table->unsignedBigInteger('Opciones_id');
            $table->foreign('Opciones_id')->references('id')->on('opciones');
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
        Schema::dropIfExists('CursoEspecial');
    }
}
