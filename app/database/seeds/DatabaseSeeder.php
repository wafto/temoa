<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');

		Eloquent::unguard();

		$this->call('DependenciesTableSeeder');
		$this->call('ContactsTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('InterestsTableSeeder');
		$this->call('CareerPathsTableSeeder');
		$this->call('AcademicTrainingsTableSeeder');
		$this->call('CoursesTableSeeder');

		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
