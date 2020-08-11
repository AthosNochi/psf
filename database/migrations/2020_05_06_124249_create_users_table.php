<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;


/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table){
           $table->increments('id');

            //People data
           $table->string('cpf', 11)->unique()->nullable();
		   $table->string('name', 50);
		   $table->string('rg', 50)->unique()->nullable();
           $table->char('phone', 11);

            //Auth data
           $table->string('email', 80)->unique();
           $table->string('password', 254)->nullable();

            //Permission
		   $table->boolean('isAdm')->null();
		   $table->bigInteger('adminId')->nullable();

           $table->rememberToken();
		   $table->timestamps();
		   $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function (Blueprint $table) {

		});
		Schema::drop('users');


	}
}
