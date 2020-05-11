<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computadoras extends Model
{
    //
    public function control_cambios_computadora()
    {
        // devuelve la lista de cambios realizados en la computadora
        return $this->hasMany('App/control_cambios_computadora');


    }
        // relacion inversa 1:N con usuarios que utilizan esta computadora
    public function usuarios() {
        return $this->belongsTo('App/Usuario');
    }


}

