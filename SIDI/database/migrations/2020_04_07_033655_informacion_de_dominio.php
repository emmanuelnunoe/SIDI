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

        Schema::create('informacion_de_dominio', function(Blueprint $table) {
            /*--------- INFORMACION DE DOMINIO------------- */
            $table->unsignedInteger('id');
            $table->unsignedInteger('computadora_id');
            $table->foreign('computadora_id')->references('id')->on('computadoras')->onDelete('cascade');
            $table->boolean('unido_a_dominio');          // 1:=i, 0=no
=======
        Schema::create('informacion_de_dominio', function(Blueprint $table) {
            /*--------- INFORMACION DE DOMINIO------------- */
            $table->foreignId('computadoras');
            $table->boolean('unido_a_dominio');          // 0:si, 1:no
>>>>>>> parent of 15c96e0... Migrations estan funcionando
            $table->string('cuenta_dominio');
            $table->password_hash('contrasena');
            $table->string('zona_horaria');
            $table->integer('nombre_de_dominio');
            $table->string('email');
            $table->boolean('lynk');
            $table->int('permisos_de_usuario');
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
      
        Schema::table('informacion_de_dominio', function (Blueprint $table) {
                $table->dropForeign(['computadora_id']); // drop the foreign key.
                $table->dropColumn('computadora_id'); // drop the column
          });
          Schema::dropIfExists('informacion_de_dominio');
       
         
    }
}
