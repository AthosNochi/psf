<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateAnamnesesTable.
 */
class CreateAnamnesesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('anamneses', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 50);
			$table->string('gender', 50);
			$table->char('age', 50);
			$table->string('corEtnia', 50);
			$table->string('estadoCivil', 50);
			$table->string('profissao', 50);
			$table->string('naturalidade', 50);
			$table->string('address', 50);
			$table->string('nomeMae', 50);
			$table->string('religiao', 50);
			$table->string('alergias', 50);
			$table->string('queixaPrincipal', 100);
			$table->string('historicoDoenca', 200);
			$table->string('sintomas', 100);

			$table->integer('patient_id')->unsigned();
			$table->integer('secretaria_id')->unsigned();
			$table->integer('doctor_id')->unsigned();
			$table->integer('enfermeiro_id')->unsigned();

			$table->foreign('patient_id')->references('id')->on('patients');
			$table->foreign('secretaria_id')->references('id')->on('secretarias');
			$table->foreign('doctor_id')->references('id')->on('doctors');
			$table->foreign('enfermeiro_id')->references('id')->on('enfermeiros');
            
			

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
		Schema::drop('anamneses');
	}
}
