<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreatePatientsTable.
 */
class CreatePatientsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('patients', function (Blueprint $table){
           $table->increments('id');

            //People data
           $table->integer('cpf', 11)->unique()->nullable();
		   $table->string('name', 50);
		   $table->integer('rg')->unique()->nullable();
		   $table->integer('phone');
		   $table->char('birth', 30);
		   $table->char('gender', 20);
		   $table->string('notes', 100);

            //Auth data
           $table->string('email', 80)->unique();
           $table->string('password', 254)->nullable();

            //Permission
           //---//

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
		Schema::table('patients', function (Blueprint $table) {

		});
		Schema::drop('patients');
	}
}
