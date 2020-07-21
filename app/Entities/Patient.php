<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name',
        'genre',
        'birth',
        'phone',
        'address',
    ];

    public function agenda()
    {
        return $this->hasMany(Agenda::class, 'id_patient', 'id');
    }
}
