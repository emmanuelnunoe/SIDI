<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChecklist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklist', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->date('fecha_de_elaboracion');
            $table->integer('folio');
            $table->date('fecha');
            $table->unsignedBigInteger('computadora_id');
        });

        Schema::table('checklist', function($table) {
            $table->foreign('computadora_id')
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
        Schema::table('checklist', function($table) {
            $table->dropForgein(['computadora_id']);

        }); 
        Schema::dropIfExists('checklist');
    }
}



