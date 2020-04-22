<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mantenimientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // revisar
        Schema::create('mantenimientos', function(Blueprint $table) {
        $table->bigIncrements('id');
        $table->date('ultimo_servicio');
        $table->boolean('tipo_servicio');
        
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
        //
        Schema::dropIfExists('mantenimientos');
    }
}
