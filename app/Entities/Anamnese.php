<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Anamnese.
 *
 * @package namespace App\Entities;
 */
class Anamnese extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table    = 'anamneses';
    protected $fillable = ['name', 'gender', 'age', 'corEtnia', 'estadoCivil', 'profissao', 'naturalidade', 'address', 'nomeMae', 'religiao', 'alergias', 'queixaPrincipal', 'historicoDoença', 'sintomas'];

}
