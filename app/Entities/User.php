<?php

namespace App\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Auth;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    //** the ORM database atributes **//


   public 	 $timestamps   =  true;
   protected $table        = 'users';
   protected $fillable     = ['cpf', 'name', 'rg', 'phone', 'email', 'password', 'isAdm'];
   protected $hidden       = ['password', 'remember_token'];

   public static function saveNew($dados){
     $obj = new User();
     $obj->isAdm = Arr::has($dados,'isAdm');
     $obj->cpf   = $dados->cpf;
     $obj->name  = $dados->name;
     $obj->rg    = $dados->rg;
     $obj->phone  = $dados->phone;
     $obj->email = $dados->email;
     $obj->password = bcrypt('123');
     $obj->adminId = Auth::user()->id;
     $obj->save();
   }


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
