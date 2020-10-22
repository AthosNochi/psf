<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateDoctorsTable.
 */
class CreateDoctorsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('doctors', function (Blueprint $table){
           $table->increments('id');

            //People data
           $table->string('cpf', 11)->unique()->nullable();
		   $table->string('name', 50);
		   $table->string('rg', 50)->unique()->nullable();
           $table->char('phone', 11);
		   $table->char('crm', 50)->unique()->nullable();
		   $table->char('specialty', 50)->nullable();
		   

            //Auth data
           $table->string('email', 80)->unique();
		   $table->string('password', 254)->nullable();
		   

			//Permission
			//-----------//

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
		Schema::table('doctors', function (Blueprint $table) {
		});
		Schema::drop('doctors');
	}
}
