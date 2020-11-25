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
                      $table->integer('tipo');                                      // 1= pc 0=laptop
                      $table->string('marca');
                      $table->string('modelo');
                      $table->string('control_cambios_pc_id');
                      $table->timestamps();
                      $table->unsignedBigInteger('ubicacion');                 //foreign
                      $table->longText('comentarios');


          
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