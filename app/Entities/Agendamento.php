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

    protected $fillable = ['id_doctor', 'id_patient'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'id_doctor');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'id_patient');
    }
    
}
