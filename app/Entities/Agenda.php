<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Agenda.
 *
 * @package namespace App\Entities;
 */
class Agenda extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $timestamps      = true;
    protected $fillable = ['dataAgendamento', 'dataRetorno'];

}
