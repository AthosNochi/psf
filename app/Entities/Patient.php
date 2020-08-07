<?php

namespace App\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Database\Eloquent\Model;

class Patient extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    //** the ORM database atributes **//


   public 	 $timestamps   =  true;
   protected $table        = 'patients';
   protected $fillable     = ['cpf', 'name', 'rg', 'phone', 'birth', 'gender', 'notes', 'email', 'password'];
   protected $hidden       = ['password', 'remember_token'];


   public function setPasswordAttribute ($value)
   {
   		$this->attributes['password'] = env('PASSWORD_HASH') ? bcrypt('$value') : '$value';
   }

   public function getCpfAttribute()
   {
        $cpf = $this->attributes['cpf'];
        return substr($cpf, 0, 3). '.' . substr($cpf, 3, 3). '.' . substr($cpf, 6, 3). '-' . substr($cpf, -2);
   }

   public function getPhoneAttribute()
   {
       $phone = $this->attributes['phone'];
       return "(" . substr($phone, 0, 2) . ")" . substr($phone, 2, 4) . "-" . substr($phone, -4) ;
   }

   public function getRgAttribute()
   {
        $rg = $this->attributes['rg'];
        return substr($rg, 0, 2). '.' . substr($rg, 2, 3). '.' . substr($rg, 5, 3). '-' . substr($rg, -1);
   }

   public function setDataAttribute($value)
   {
     $dia = substr($value, 8, 2);
     $mes = substr($value, 5, 2);
     $ano = substr($value, 0, 4);

     $this->attributes['data'] = Carbon::create($ano, $mes, $dia, 0, 0);
   }
}
