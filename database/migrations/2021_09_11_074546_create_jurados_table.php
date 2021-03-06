<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('egresado_id')->references('id')->on('users');
            //$table->foreignId('tema_id')->references('id')->on('users');
            $table->string('presidente');
            $table->string('secretario');
            $table->string('vocalp');
            $table->string('vocals');
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
        Schema::dropIfExists('jurados');
    }
}
