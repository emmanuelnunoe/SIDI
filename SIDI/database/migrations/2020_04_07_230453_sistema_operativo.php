<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SistemaOperativo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('sistemas_operativos', function(Blueprint $table) {
        $table->unsignedBigInteger('id');
        $table->string('sitema_operativo');        //  descripcion
        $table->integer('edicion');                 //  tipo edicion
        $table->boolean('tipo_sistema');            //  0:32bit, 1:64bits
        $table->integer('servicepack');
        $table->boolean('licencia_activa');       //  0:si, 1:no
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sistemas_operativos');
    }
}
