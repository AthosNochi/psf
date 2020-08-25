<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'isAdm'         => true,
        	'name' 			=> 'athos',
            'email' 		=> 'athos@sistemas.com',
            'phone'         => '1971025399',
        	'password'		=> env('PASSWORD_HASH') ? bcrypt('1234') : '1234',
        ]);
    }
}
