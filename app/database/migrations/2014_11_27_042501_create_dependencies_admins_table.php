<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDependenciesAdminsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dependencies_admins', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('dependency_id')->unsigned()->index();
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
		Schema::drop('dependencies_admins');
	}

}
