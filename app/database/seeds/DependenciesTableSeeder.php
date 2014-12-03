<?php

class DependenciesTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        Dependency::truncate();

        foreach (range(1, 1600) as $index)
        {
            $dependency = new Dependency();
            $dependency->name = $faker->company;
            $dependency->responsable = $faker->name;
            $dependency->save();
        }

    }
}
