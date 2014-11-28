<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCivilServantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('civil_servants', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('surnames');
			$table->integer('dependency_id')->unsigned()->index();
			$table->string('area');
			$table->string('job');
			$table->dateTime('job_from');
			$table->text('plan_objectives');
			$table->timestamps();
			$table->foreign('dependency_id')->references('id')->on('dependencies')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('civil_servants');
	}

}
