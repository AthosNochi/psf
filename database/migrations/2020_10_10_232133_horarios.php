<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Horarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function(Blueprint $table) {
            $table->increments('id')->nullable();

            $table->integer('id_doctor')->nullable()->unsigned();
            $table->datetime('datahora');
            $table->datetime('datahorainicio');
            $table->datetime('datahorafim');

            

        

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
        Schema::drop('horarios');
    }
}
