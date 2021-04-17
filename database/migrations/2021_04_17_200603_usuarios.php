<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sucursal_id')->nullable();
            $table->string('nombre, 30');
            $table->string('nombres')->nullable();
            $table->string('apellido1, 50');
            $table->string('apellido2, 50');
            $table->date('nacimiento');
            $table->string('correo');
            $table->string('password');
            $table->Integer('TipoU');
            $table->string('img');
            $table->string('licencia')->nullable();
            $table->foreign('sucursal_id')->references('id')->on('sucursales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
