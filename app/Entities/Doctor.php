<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //

    public function agenda()
    {
        return $this->hasMany(Agenda::class, 'id_doctor', 'id');
    }
}