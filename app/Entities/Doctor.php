<?php

namespace App\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Notifications\Notifiable;

/**
 * Class Doctor.
 *
 * @package namespace App\Entities;
 */
class Doctor extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    //** the ORM database atributes **//


   public 	 $timestamps   =  true;
   protected $table        = 'doctors';
   protected $fillable     = ['cpf', 'name', 'rg', 'phone', 'email', 'password', 'crm'];
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
}
