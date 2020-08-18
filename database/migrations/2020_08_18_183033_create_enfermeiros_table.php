<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateEnfermeirosTable.
 */
class CreateEnfermeirosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enfermeiros', function(Blueprint $table) {
			$table->increments('id');

			 //People data
			 $table->integer('cpf')->unique()->nullable();
			 $table->string('name', 50);
			 $table->integer('rg')->unique()->nullable();
			 $table->integer('phone');
			
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
		Schema::drop('enfermeiros');
	}
}
