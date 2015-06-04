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
		Schema::create('asisgnatura_docentes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('docente_id')->unsigned();
			$table->foreign('docente_id')->references('id')->on('docentes')->onDelete('cascade');
			$table->integer('asignatura_id')->unsigned();
			$table->foreign('asignatura_id')->references('id')->on('asignaturas')->onDelete('cascade');
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
		Schema::drop('asisgnatura_docentes');
	}

}
