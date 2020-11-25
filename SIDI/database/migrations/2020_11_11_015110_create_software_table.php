<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('software', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('sistema_operativo');
            $table->enum('edicion',['enterprise','profesional']);
            $table->boolean('tipo_sistema');                              // 1=32bits, 0=64bits
            $table->integer('service_pack');
            $table->boolean('licencia_activa');                           //  1=si, 0=no marca_monitor


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('software');
    }
}
