<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCareerPathsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('career_paths', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('civil_servant_id')->unsigned()->index();
			$table->enum('sector', ['público', 'privado']);
			$table->text('activities');
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
		Schema::drop('career_paths');
	}

}
