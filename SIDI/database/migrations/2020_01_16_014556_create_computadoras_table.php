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
            /*--------- DATOS DEL EQUIPO ------------- */
            $table->bigIncrements('id');
            $table->string('numero_de_inventario');
            $table->integer('tipo');                    // 1= pc 0=laptop
            $table->string('marca');
            $table->string('modelo');
            $table->string('numero_de_serie');
            $table->string('procesadores');
            $table->string('velocidad');
            $table->integer('disco_duro');              //  capacidad en GB
            $table->integer('ram');                     //  capacidad en GB
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
