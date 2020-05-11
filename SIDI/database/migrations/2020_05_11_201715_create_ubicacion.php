<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbicacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicacion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nombre');
            $table->string('delegacion_o_municipio');
            $table->string('innmueble_imss');
            $table->string('referencia');
            $table->string('clave_prei');
            $table->string('calle');
            $table->string('colonia');
            $table->string('delegacion');
            $table->string('ciudad');
            $table->string('piso');
            $table->string('telefono');
            $table->integer('extension');
            $table->integer('direccion_normativa');
            $table->integer('coordinacion_o_unidad');
            $table->integer('division_area_o_especialidad');
            $table->integer('departamento_o_servicio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubicacion');
    }
}


