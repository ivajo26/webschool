<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropPeriodosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::drop('periodos');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::create('periodos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->decimal('taller',2,1);
			$table->decimal('quiz',2,1);
			$table->decimal('parcial',2,1);
			$table->decimal('nota_final',2,1);
			$table->timestamps();
		});
	}

}
