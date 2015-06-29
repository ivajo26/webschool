<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyNotasTable extends Migration {

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
			$table->text('estudiante_id');
			$table->decimal('periodo_1',2,1)->nullable();
			$table->decimal('periodo_2',2,1)->nullable();
			$table->decimal('periodo_3',2,1)->nullable();
			$table->decimal('nota_final',2,1)->nullable();
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
			$table->decimal('periodo_1',2,1);
			$table->decimal('periodo_2',2,1);
			$table->decimal('periodo_3',2,1);
			$table->decimal('nota_final',2,1);
			$table->timestamps();
		});
	}

}
