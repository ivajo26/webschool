<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignaturasProfesorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asisgnatura_profesor', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('profesor_id')->unsigned();
			$table->foreign('profesor_id')->references('id')->on('profesor')->onDelete('cascade');
			$table->integer('asignatura_id')->unsigned();
			$table->foreign('asignatura_id')->references('id')->on('asignatura')->onDelete('cascade');
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
		Schema::drop('asisgnatura_profesor');
	}

}
