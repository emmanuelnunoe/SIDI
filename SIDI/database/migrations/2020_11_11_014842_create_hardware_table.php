<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHardwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hardware', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('procesador');
            $table->integer('velocidad');
            $table->integer('disco_duro');                               //  capacidad en GB
            $table->integer('ram');                                      //  capacidad en GB
            $table->string('marca_monitor');
            $table->string('modelo_monitor');
            $table->string('serie_monitor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hardware');
    }
}
