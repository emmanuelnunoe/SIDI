<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finanzas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('numero_de_serie');
            $table->string('centro_de_costos');
            $table->integer('anio_adquisicion');
            $table->enum('procedencia',['compra','donacion','siniestro','PNAEC']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hardware');
    }
}
