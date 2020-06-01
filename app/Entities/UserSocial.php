<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserSocial extends Model
{
    use Notifiable;
    use SoftDeletes

    //** the ORM database atributes **//


   public 	 $timestamps   =  true;
   protected $table        = 'user_socials';
   protected $fillable     = ['user_id', 'social_network', 'social_id', 'social_email', 'social_avatar'];
   protected $hidden       = [];
}
