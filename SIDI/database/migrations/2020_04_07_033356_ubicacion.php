<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ubicacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    {   
        Schema::dropIfExists('ubicacion');
=======
    {
>>>>>>> parent of 15c96e0... Migrations estan funcionando
=======
    {
>>>>>>> parent of 15c96e0... Migrations estan funcionando
=======
    {
>>>>>>> parent of 15c96e0... Migrations estan funcionando
=======
    {    Schema::dropIfExists('ubicacion');
>>>>>>> parent of 016532b... actualizacion migrations: foreign keys
        Schema::create('ubicacion', function(Blueprint $table) {
                      /*--------- UBICACION FISICA------------- */
                      $table->string('piso');
                      $table->string('Area');

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
