<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RentasAutomoviles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentas_automoviles', function (Blueprint $table) {
            $table->unsignedBigInteger('renta_id');
            $table->unsignedBigInteger('automovil_id');
            $table->foreign('renta_id')->references('id')->on('rentas');
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
        Schema::dropIfExists('rentas_automoviles');
    }
}
