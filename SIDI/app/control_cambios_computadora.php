<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class control_cambios_computadora extends Model
{
    //

    public function computadora()
    {
        return $this->belongsTo('App\Computadora');
    }

    

    public function cambiarUbicacion( $id, $ubicacionActual, $nuevaUbicacion){

        $model = new App\Computadora();
        $computadora =  $model->hydrate
        DB:select(

        )
    }
}
