<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputadorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computadoras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('numero_de_inventario');
            $table->string('marca');
            $table->string('modelo');
            $table->string('serie');
            $table->macAddress('mac_Address');
            $table->ipAddress('ip');
            $table->string('usuario_de_dominio');
            $table->string('contrasena');
            $table->string('ubicacion');
            $table->string('sistema_operativo');
            $table->integer('service_pack');
            $table->dateTime('ultimo_mantenimiento');

            /**Fecha de proximo mantenimiento corresponde  la fecha del ultimo mantenimiento mas seis meses posteriores,
             *
            */

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('computadoras');
    }
}
