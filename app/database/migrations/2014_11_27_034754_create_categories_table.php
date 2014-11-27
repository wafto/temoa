<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 24)->unique();
			$table->text('description')->nullable();
			$table->timestamps();
		});

		$now = date('Y-m-d H:i:s');

		DB::table('categories')->insert(['created_at' => $now, 'updated_at' => $now, 'name' => 'Desarollo y Sistemas']);
		DB::table('categories')->insert(['created_at' => $now, 'updated_at' => $now, 'name' => 'Infraestructura']);
		DB::table('categories')->insert(['created_at' => $now, 'updated_at' => $now, 'name' => 'Telecomunicaciones']);
		DB::table('categories')->insert(['created_at' => $now, 'updated_at' => $now, 'name' => 'Soporte']);
		DB::table('categories')->insert(['created_at' => $now, 'updated_at' => $now, 'name' => 'Seguridad']);
		DB::table('categories')->insert(['created_at' => $now, 'updated_at' => $now, 'name' => 'Otros']);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categories');
	}

}
