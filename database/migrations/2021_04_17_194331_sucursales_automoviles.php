<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SucursalesAutomoviles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursales_automoviles', function (Blueprint $table) {
            $table->unsignedBigInteger('sucursal_id');
            $table->unsignedBigInteger('automovil_id');
            $table->foreign('sucursal_id')->references('id')->on('sucursales');
            $table->foreign('automovil_id')->references('id')->on('automoviles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sucursales_automoviles');
    }
}
