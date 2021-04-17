<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SucursalesRentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursales_rentas', function (Blueprint $table) {
            $table->unsignedBigInteger('sucursal_id');
            $table->unsignedBigInteger('renta_id');
            $table->foreign('sucursal_id')->references('id')->on('sucursales');
            $table->foreign('renta_id')->references('id')->on('rentas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sucursales_rentas');
    }
}
