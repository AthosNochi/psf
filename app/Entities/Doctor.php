<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = "doctor";

    public function agenda()
    {
        return $this->hasMany(Agenda::class, 'id_doctor', 'id');
    }
}