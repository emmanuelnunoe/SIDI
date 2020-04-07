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
            $table->string('procesadores');
            $table->string('velocidad');
            $table->integer('disco_duro');              //  capacidad en GB
            $table->integer('ram');                     //  capacidad en GB
            $table->integer('sitema_operativo');        //  catalogo de sistemas operativos
            $table->integer('edicion');                 //  catalogo de edicion
            $table->boolean('tipo_sistema');            //  0:32bit, 1:64bits
            $table->integer('servicepack');
            $table->boolean('licencia_activa');       //  0:si, 1:no
            $table->timestamps();

            /*
                        $table->date('ultimo_servicio');
                        $table->boolean('tipo_servicio');
                        $table->date('prox_servicio');
                        $table->boolean('envio_subdelegacion');  // 1=se esta reparando en subdelegacion, 0:el equipo esta activo en la unidad
                        $table->date('fecha_de_envio_subdelegacione');
                        $table->table('entrega_subdelegacion');
                        $table->boolean('activo');
                        $table->string('version_de_imagen');
                        $table->string('foto');     
                    
            
            */
            
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
