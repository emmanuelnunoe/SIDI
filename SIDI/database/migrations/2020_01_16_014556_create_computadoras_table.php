<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputadorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computadoras', function (Blueprint $table) {
            /*--------- DATOS DEL EQUIPO ------------- */
            $table->bigIncrements('id');
            $table->string('numero_de_inventario');
            $table->integer('tipo');
            $table->string('marca');
            $table->string('modelo');
            $table->string('numero_de_serie');
            $table->string('centro_de_costos');
            $table->date('anio_de_adquisicion');
            $table->integer('procedencia');             //  catalogo de procedencias
            $table->integer('garantia');                //  0:si, 1:no, otro: cantidad en meses
            $table->string('host');
            $table->macAddress('mac_address');
            $table->ipAddress('direccion_ip');
            $table->boolean('tipo_ip');                 //   0: estatica, 1:dinamico
            $table->boolean('internet');                //   0:normal, 1:extendido
            $table->string('procesador');
            $table->string('velocidad');
            $table->integer('disco_duro');              //  capacidad en GB
            $table->integer('ram');                     //  capacidad en GB
            $table->integer('sitema_operativo');        //  catalogo de sistemas operativos
            $table->integer('edicion');                 //  catalogo de edicion
            $table->boolean('tipo_sistema');            //  0:32bit, 1:64bits
            $table->integer('servicepack');
            $table->boolean('licencia_activada');       //  0:si, 1:no

            /*--------- UBICACION FISICA------------- */
            $table->string('piso');
            $table->string('Area');


            /*--------- INFORMACION DE DOMINIO------------- */
            $table->boolean('unido_a_dominio');          // 0:si, 1:no
            $table->string('cuenta_dominio');
            $table->string('contraseña');
            $table->string('contraseña_anterior');
            $table->integer('zona_horaria');            //  catalogo de zonas horaria
            $table->integer('nombre_de_dominio');       //  catalogo de dominos html

            $table->date('ultimo_mantenimiento');
            $table->date('prox_mantenimiento');
            $table->boolean('activo');
            $table->string('version_de_imagen');
            $table->string('foto');








 
            $table->timestamps();
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
