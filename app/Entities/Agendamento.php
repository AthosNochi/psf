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
    
    public function patient()
    {
        return $this->belongsTo('App\Entities\Patient', 'id_patient');
    }

    public function doctor()
    {
        return $this->belongsTo('App\Entities\Doctor', 'id_doctor');
    }
}
