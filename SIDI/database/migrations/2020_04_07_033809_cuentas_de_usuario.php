<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CuentasDeUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('cuentas_de_usuario', function(Blueprint $table) {
                /*--------- CUENTAS DE USUARIO------------- */
                $table->string('contraseña');
                $table->string('contraseña_anterior');
                $table->integer('nombre_de_dominio');       //  catalogo de dominos html
            
    
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
