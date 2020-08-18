<?php

namespace App\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    //** the ORM database atributes **//


   public 	 $timestamps   =  true;
   protected $table        = 'users';
   protected $fillable     = ['name', 'email', 'password', 'isAdm'];
   protected $hidden       = ['password', 'remember_token'];

}
