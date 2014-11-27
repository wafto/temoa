<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAcademicTrainingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('academic_trainings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('civil_servant_id')->unsigned()->index();
			$table->enum('type', ['licenciatura', 'posgrado', 'certificacion', 'habilidad', 'curso']);
			$table->string('name');
			$table->text('description');
			$table->timestamps();
			$table->foreign('civil_servant_id')->references('id')->on('civil_servants')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('academic_trainings');
	}

}
