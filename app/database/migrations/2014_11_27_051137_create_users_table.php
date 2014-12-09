<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('ext');
			$table->string('phone');
			$table->string('mobile_phone');
			$table->string('linkedin')->nullable();
			$table->boolean('active')->default(0);
			$table->integer('partner_id')->unsigned()->index()->nullable();
			$table->integer('admin_id')->unsigned()->index()->nullable();
			$table->integer('dependency_admin_id')->unsigned()->index()->nullable();
			$table->integer('civil_servant_id')->unsigned()->index()->nullable();
			$table->string('remember_token')->nullable();
			$table->timestamps();
		    $table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade');
		    $table->foreign('dependency_admin_id')->references('id')->on('dependencies_admins')->onDelete('cascade');
		    $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
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
		Schema::drop('users');
	}

}
