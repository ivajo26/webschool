<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignacionDocenteAsignaturasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asignacion_docente_asignaturas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('asignatura_id');
			$table->foreign('asignatura_id')->references('id')->on('asignaturas')->onDelete('cascade');
			$table->unsignedInteger('docente_id');
			$table->foreign('docente_id')->references('user_id')->on('docentes')->onDelete('cascade');
			$table->unsignedInteger('grado_id');
			$table->foreign('grado_id')->references('id')->on('grados')->onDelete('cascade');
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
		Schema::drop('asignacion_docente_asignaturas');
	}

}
