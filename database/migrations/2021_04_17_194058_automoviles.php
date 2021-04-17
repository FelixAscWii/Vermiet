<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Automoviles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automoviles', function (Blueprint $table) {
            $table->id();
            $table->string('matricula, 8');
            $table->string('marca, 50');
            $table->string('modelo, 50');
            $table->string('color, 50');
            $table->year('anio');
            $table->string('asientos, 4');
            $table->string('transmision, 8');
            $table->Integer('precio');
            $table->string('valoracion');
            $table->string('foto1');
            $table->string('foto2');
            $table->string('foto3');
            $table->string('foto4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('automoviles');
    }
}
