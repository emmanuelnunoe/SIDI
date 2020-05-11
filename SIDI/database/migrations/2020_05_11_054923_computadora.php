<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Computadora extends Migration

{
  
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('computadoras',function(Blueprint $table) {
                      /*--------- DATOS DEL EQUIPO ------------- */
                      $table->bigIncrements('id');
                      $table->integer('tipo');                    // 1= pc 0=laptop
                      $table->string('marca');
                      $table->string('modelo');
                      $table->string('numero_de_serie');
                      $table->string('centro_de_costos');
                      $table->integer('anio_adquisicion');
                      $table->enum('procedencia',['compra','donacion','siniestro','PNAEC']);
                      $table->string('host');
                      $table->macAddress('direccion_mac');
                      $table->ipAddress('direccion_ip');
                      $table->boolean('tipo_ip');
                      $table->boolean('internet');
                      $table->string('procesador');
                      $table->integer('velocidad');
                      $table->integer('disco_duro');              //  capacidad en GB
                      $table->integer('ram');                     //  capacidad en GB
                      $table->integer('sistema_operativo');
                      $table->enum('edicion',['enterprise','profesional']);
                      $table->boolean('tipo_sistema');           // 1=32bits, 0=64bits
                      $table->integer('service_pack');
                      $table->boolean('licencia_activa');           //  1=si, 0=no marca_monitor
                      $table->string('marca_monitor');
                      $table->string('modelo_monitor');
                      $table->string('serie_monitor');
                      $table->string('control_cambios_pc_id');
                      $table->timestamps();
          
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