<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotaAsignaturaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nota_asignatura', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('asignatura_id')->unsigned();
			$table->foreign('asignatura_id')->references('id')->on('asignatura')->onDelete('cascade');
			$table->integer('periodo1_id')->unsigned();
			$table->foreign('periodo1_id')->references('id')->on('nota')->onDelete('cascade');
			$table->integer('periodo2_id')->unsigned();
			$table->foreign('periodo2_id')->references('id')->on('nota')->onDelete('cascade');
			$table->integer('periodo3_id')->unsigned();
			$table->foreign('periodo3_id')->references('id')->on('nota')->onDelete('cascade');
			$table->decimal('nota_final', 2,1);
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
		Schema::drop('nota_asignatura');
	}

}
