<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Psf.
 *
 * @package namespace App\Entities;
 */
class Psf extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable     = ['name', 'endereco', 'phone', 'regiao'];
    public $timestamps      = true;

}
