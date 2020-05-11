<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ControlCambiosPc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_cambios_pc', function($table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->timestamps();
            $table->date('fecha');
            $table->string('motivo');
            $table->string('usuario');
            $table->string('cambios');
            $table->unsignedBigInteger('computadora_id'); // foreign


          
        });

        Schema::table('control_cambios_pc', function($table) {
            $table->foreign('computadora_id')
            ->references('id')
            ->on('computadoras')
            ->onDelete('cascade');

        }); 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('control_cambios_pc', function($table) {
            $table->dropForgein('computadora_id');

        }); 
        Schema::dropIfExists('control_cambios_pc');
    }
}
