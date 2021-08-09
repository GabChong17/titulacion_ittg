<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('NoControl',20);
            $table->string('name',20);
            $table->string('a_paterno',20);
            $table->string('a_materno',20);
            $table->string('carrera');
            $table->string('campus');
            $table->string('planDeestudios');
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('telefono');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->enum('rol', ['admin','egresado','division','jefatura','academia','escolares','asesor'])->default('egresado');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
