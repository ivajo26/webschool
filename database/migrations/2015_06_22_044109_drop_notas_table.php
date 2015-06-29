<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropNotasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::drop('notas');
		Schema::create('notas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('ada_id');
			$table->foreign('ada_id')->references('id')->on('asignacion_docente_asignaturas')->onDelte('cascade');
			$table->decimal('periodo_1',2,1);
			$table->decimal('periodo_2',2,1);
			$table->decimal('periodo_3',2,1);
			$table->decimal('nota_final',2,1);
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
		Schema::create('notas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('ada_id');
			$table->foreign('ada_id')->references('id')->on('asignacion_docente_asignaturas')->onDelte('cascade');
			$table->unsignedInteger('periodo_1');
			$table->foreign('periodo_1')->references('id')->on('periodos')->onDelte('cascade');
			$table->unsignedInteger('periodo_2');
			$table->foreign('periodo_2')->references('id')->on('periodos')->onDelte('cascade');
			$table->unsignedInteger('periodo_3');
			$table->foreign('periodo_3')->references('id')->on('periodos')->onDelte('cascade');
			$table->decimal('nota_final',2,1);
			$table->timestamps();
		});
	}

}
