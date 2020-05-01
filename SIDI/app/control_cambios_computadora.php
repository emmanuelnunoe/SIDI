<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class control_cambios_computadora extends Model
{
    //

    public function computadora()
    {
        return $this->belongsTo('App\Computadoras');
    }
}
