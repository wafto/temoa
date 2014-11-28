<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTakenCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('taken_courses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('course_id')->unsigned()->index();
			$table->integer('civil_servant_id')->unsigned()->index();
			$table->dateTime('start_at');
			$table->dateTime('end_at');
			$table->float('score');
			$table->timestamps();
			$table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
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
		Schema::drop('taken_courses');
	}

}
