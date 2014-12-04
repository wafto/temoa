<?php

class AcademicTrainingsTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        AcademicTraining::truncate();
        $servants = CivilServant::all();

        foreach ($servants as $servant)
        {
            $academics = [];

            foreach (range(1, rand(2, 4)) as $index)
            {
                $academic = new AcademicTraining();
                $academic->type = $faker->randomElement(['licenciatura', 'posgrado', 'certificacion', 'habilidad', 'curso']);
                $academic->name = $faker->word;
                $academic->description = $faker->text;
                $academics[] = $academic;
            }

            $servant->academicTrainings()->saveMany($academics);
        }
    }
}
