<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InformacionComplementariaComputadora extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacion_complementaria_computadora', function (Blueprint $table) {
        
            /* tabla complemento_informacion_computadora */
            $table->integer('garantia');                //  0:si, 1:no, otro: cantidad en meses
            $table->string('host'); // pendiente de revisar
            $table->boolean('internet');                //   0:normal, 1:extendido
            $table->string('centro_de_costos');
            $table->date('anio_de_adquisicion');
            $table->integer('procedencia');             //  catalogo de procedencias
            $table->integer('zona_horaria');                  
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
