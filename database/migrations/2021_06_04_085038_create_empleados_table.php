<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('name',20);
            $table->string('a_paterno',20);
            $table->string('a_materno',20);
            $table->string('departamento');
            $table->string('carrera');
            $table->string('campus');
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('telefono')->unique();
            $table->string('password');
            $table->string('roles');
            $table->rememberToken();
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
        Schema::dropIfExists('empleados');
    }
}
