<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateAgendamentosTable.
 */
class CreateAgendamentosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_patient')->unsigned()->nullable();
            $table->integer('id_doctor')->unsigned()->nullable();
            $table->string('descricao');
            $table->datetime('datahora');
            $table->string('legenda', 100);
            $table->timestamps();
            $table->foreign('id_patient')->references('id')->on('patients');
            $table->foreign('id_doctor')->references('id')->on('doctors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('agendamentos');
    }
}
