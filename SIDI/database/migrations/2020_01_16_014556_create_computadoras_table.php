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
<<<<<<< HEAD
<<<<<<< HEAD
   
=======
>>>>>>> parent of 15c96e0... Migrations estan funcionando
=======
>>>>>>> parent of 15c96e0... Migrations estan funcionando
        Schema::create('computadoras', function (Blueprint $table) {
            /*--------- DATOS DEL EQUIPO ------------- */
            $table->increments('id');
            $table->string('numero_de_inventario');
            $table->integer('tipo');                    // 1= pc 0=laptop
            $table->string('marca');
            $table->string('modelo');
            $table->string('numero_de_serie');
            $table->string('procesadores');
            $table->string('velocidad');
            $table->integer('disco_duro');              //  capacidad en GB
<<<<<<< HEAD
<<<<<<< HEAD
            $table->integer('ram');                    //  capacidad en GB
=======
            $table->integer('ram');                     //  capacidad en GB
            $table->foreign('sistema_operativo')->references('id')->on('sistemas_operativos');
            $table->foreign('info_complementaria')->references('id')->on('informacion_complementaria_computadora');
>>>>>>> parent of 15c96e0... Migrations estan funcionando
=======
            $table->integer('ram');                     //  capacidad en GB
            $table->foreign('sistema_operativo')->references('id')->on('sistemas_operativos');
            $table->foreign('info_complementaria')->references('id')->on('informacion_complementaria_computadora');
>>>>>>> parent of 15c96e0... Migrations estan funcionando
            $table->timestamps();
            $table->macAddress('mac_address');
            $table->ipAddress('direccion_ip');
            $table->boolean('tipo_ip');                 //   1: estatica, 0:dinamico 
            $table->string('host'); // pendiente de revisar
            $table->boolean('internet');                //   1:normal, 0:extendido
            


           


            
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
