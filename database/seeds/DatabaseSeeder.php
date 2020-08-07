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
        	'cpf' 			=> '14785236696',
        	'name' 			=> 'athos',
            'phone' 		=> '1971025399',
            'rg'            => '251478523',
        	'email' 		=> 'athos@sistemas.com',
        	'password'		=> env('PASSWORD_HASH') ? bcrypt('123456') : '123456',
        ]);
    }
}
