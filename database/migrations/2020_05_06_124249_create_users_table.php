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
           $table->date('birth')->nullable();
           $table->char('gender', 1)->nullable();
           $table->text('notes')->nullable();

            //Auth data
           $table->string('email', 80)->unique();
           $table->string('password', 254)->nullable();

            //Permission
           $table->string('status')->default('active');
           $table->boolean('isAdm')->default(true);

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
