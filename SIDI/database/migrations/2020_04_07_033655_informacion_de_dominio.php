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

     
        Schema::create('informacion_de_dominio', function(Blueprint $table) {
            /*--------- INFORMACION DE DOMINIO------------- */
            $table->increments('id');
            $table->boolean('unido_a_dominio');          // 0:si, 1:no
            $table->string('cuenta_dominio');
            $table->string('contrasena');
            $table->string('correo_electronico');
            $table->boolean('lynk');
            $table->integer('permisos_de_usuario');
            $table->longText('motivo_si_es_administrador');
   
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
        Schema::dropIfExists('informacion_de_dominio');
    }
}
