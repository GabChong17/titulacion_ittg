<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisitososTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisitosos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Planes_id');
            $table->string('Nombre'); 
            $table->unsignedBigInteger('Opciones_id');
            
            $table->foreign('Planes_id')->references('id')->on('planes');
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
        Schema::dropIfExists('requisitosos');
    }
}
