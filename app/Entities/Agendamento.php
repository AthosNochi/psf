<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Agendamento.
 *
 * @package namespace App\Entities;
 */
class Agendamento extends Model
{
    //

    protected $fillable = ['name', 'doctor_id', 'patient_id'];


    public function owner()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
