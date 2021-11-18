<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MemoriaExperienciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MemoriaExperiencia', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('requisito1');
            $table->string('requisito2');
            $table->string('requisito3');
            $table->string('requisito4');
            $table->string('requisito5');
            $table->string('requisito6');
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
        Schema::dropIfExists('MemoriaExperiencia');
    }
}
