<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateSecretariasTable.
 */
class CreateSecretariasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('secretarias', function(Blueprint $table) {
			$table->increments('id');
			$table->string('cpf', 11)->unique()->nullable();
			$table->string('name', 50);
			$table->string('rg', 50)->unique()->nullable();
			$table->string('phone', 11);
			$table->string('address', 80);

			$table->string('email', 80)->unique();
			$table->string('password', 254)->nullable();
			

            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('secretarias');
	}
}
