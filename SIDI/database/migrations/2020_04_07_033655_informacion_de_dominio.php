<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InformacionDeDominio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
<<<<<<< HEAD


        Schema::create('informacion_de_dominio', function(Blueprint $table) {
            /*--------- INFORMACION DE DOMINIO------------- */
            $table->unsignedInteger('id');
            $table->unsignedInteger('computadora_id');
            $table->foreign('computadora_id')->references('id')->on('computadoras')->onDelete('cascade');
=======
        Schema::create('informacion_de_dominio', function(Blueprint $table) {
            /*--------- INFORMACION DE DOMINIO------------- */
            $table->foreignId('computadoras');
>>>>>>> parent of 15c96e0... Migrations estan funcionando
=======
        Schema::dropIfExists('informacion_de_dominio');
        Schema::create('informacion_de_dominio', function(Blueprint $table) {
            /*--------- INFORMACION DE DOMINIO------------- */
            $table->unsignedBigInteger('computadora_id');
            $table->foreign('computadora_id')->references('id')->on('computadoras');
>>>>>>> parent of 016532b... actualizacion migrations: foreign keys
            $table->boolean('unido_a_dominio');          // 0:si, 1:no
            $table->string('cuenta_dominio');
            $table->macAddress('mac_address');
            $table->ipAddress('direccion_ip');
            $table->boolean('tipo_ip');                 //   0: estatica, 1:dinamico 
            $table->string('host'); // pendiente de revisar
            $table->boolean('internet');                //   0:normal, 1:extendido
   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
