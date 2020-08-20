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

    protected $fillable = ['name', 'id_doctor', 'id_patient'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function owner()
    {
        return $this->belongsTo(Patient::class, 'id_patient');
    }
    
}
