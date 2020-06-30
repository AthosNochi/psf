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
        	'cpf' 			=> '43117378820',
        	'name' 			=> 'athos',
            'phone' 		=> '1971025399',
            'rg'            => '507506200',
        	'birth' 		=> '1997-07-08',
        	'gender' 		=> 'M',
        	'email' 		=> 'athos@sistemas.com',
        	'password'		=> env('PASSWORD_HASH') ? bcrypt('123456') : '123456',
        ]);
    }
}
