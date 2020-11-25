<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('red', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('host');
            $table->macAddress('direccion_mac');
            $table->ipAddress('direccion_ip');
            $table->boolean('tipo_ip');
            $table->boolean('internet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('red');
    }
}
