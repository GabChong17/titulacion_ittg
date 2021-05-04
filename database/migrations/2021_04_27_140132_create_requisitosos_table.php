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
            $table->string('Concepto');
            $table->string('Descripcion');
            $table->unsignedBigInteger('Opciones_id');
          
            $table->foreign('Opciones_id')->references('id')->on('opcions');
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
