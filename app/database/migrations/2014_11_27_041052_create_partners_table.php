<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartnersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('partners', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('business_name');
			$table->string('responsable');
			$table->string('rfc', 16)->index();
			$table->string('specialty_area');
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
		Schema::drop('partners');
	}

}
