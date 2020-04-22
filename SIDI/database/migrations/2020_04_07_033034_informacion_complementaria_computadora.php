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
            $table->foreign('id')->references('id')->on('computadoras');
            $table->integer('garantia');                //  0:si, 1:no, otro: cantidad en meses
            $table->string('centro_de_costos');
            $table->date('anio_de_adquisicion');
            $table->integer('procedencia');             // (1=compra, 2=donacion/siniestro, 3 PNAEC)
            $table->boolean('equipo_suceptible');       //  1=Reasignacion  0=baja    
            $table->varchar('zona_horaria'); 
             
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
