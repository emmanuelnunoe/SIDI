<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('matricula');
            $table->string('telefono');
           
            $table->string('clave_adscripcion');
            $table->enum('contratacion',['08','base','estatuto','nomina_ordinaria','nomina_mando']);
            $table->boolean('activo');
            $table->unsignedBigInteger('computadora_id'); // foreign
            $table->unsignedBigInteger('puesto_id');// foreign

            
        });

        Schema::table('usuarios', function($table) {
            $table->foreign('computadora_id')
            ->references('id')
            ->on('computadoras')
            ->onDelete('cascade');

        }); 

        Schema::table('usuarios', function($table) {
            $table->foreign('puesto_id')
            ->references('id')
            ->on('puestos')
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
        Schema::table('usuarios', function($table) {
            $table->dropForgein(['computadora_id','puesto_id']);

        }); 
        Schema::dropIfExists('usuarios');
    }
}
