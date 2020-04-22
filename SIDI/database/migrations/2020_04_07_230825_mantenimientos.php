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
        //$table->date('prox_servicio');
        //$table->boolean('envio_subdelegacion');  // 1=se esta reparando en subdelegacion, 0:el equipo esta activo en la unidad
        //$table->date('fecha_de_envio_subdelegacione');
        //$table->table('entrega_subdelegacion');
        //$table->boolean('activo');
        //$table->string('version_de_imagen');
        //$table->string('foto');    
        
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
    }
}
