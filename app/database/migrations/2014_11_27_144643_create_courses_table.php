<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('internal_number', 40)->unique();
			$table->string('external_number', 40)->unique();
			$table->string('name', 255);
			$table->integer('category_id')->unsigned()->index();
			$table->integer('partner_id')->unsigned()->index();
			$table->text('description');
			$table->integer('duration');
			$table->enum('format', ['presencial', 'línea'])->index();
			$table->boolean('visible', 1);
			$table->timestamps();
			$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
			$table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('courses');
	}

}
