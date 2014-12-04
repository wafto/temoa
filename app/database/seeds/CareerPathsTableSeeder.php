<?php

class CareerPathsTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        CareerPath::truncate();
        $servants = CivilServant::all();

        foreach ($servants as $servant)
        {
            $careers = [];

            foreach (range(1, rand(2, 4)) as $index)
            {
                $career = new CareerPath();
                $career->sector = $faker->randomElement(['público', 'privado']);
                $career->activities = $faker->text;
                $careers[] = $career;
            }

            $servant->careerPaths()->saveMany($careers);
        }
    }
}
