<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    //

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'id_doctor');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'id_patient');
    }
    
}

