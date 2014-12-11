<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses_tags', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('course_id')->unsigned()->index();
			$table->integer('tag_id')->unsigned()->index();
			$table->timestamps();
			$table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
			$table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('courses_tags');
	}

}
