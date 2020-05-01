<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ControlCambiosComputadoras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_cambios_computadoras', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->timestamps();
            $table->date('fecha');
            $table->string('motivo');
            $table->string('usuario');
            $table->string('cambios');
            $table->bigInteger('computadoras_id');
            $table->foreign('computadoras_id')->refernces('id')->on('computadoras')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('control_cambios_computadoras',function(Blueprint $table) {
            $table->dropForeign('control_cambios_computadoras_computadoras_id_foreign');
        });
        Schema::dropIfExists('control_cambios_computadoras');
        

    }
}
