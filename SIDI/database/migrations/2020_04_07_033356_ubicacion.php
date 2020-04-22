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

    {    

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
        Schema::dropIfExists('ubicacion');
    }
}
