<?php

class TakenCoursesTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        TakenCourse::truncate();

        $courses = Course::lists('id');
        $servants = CivilServant::lists('id');

        foreach (range(1, 800) as $index)
        {
            $taken = new TakenCourse();
            $taken->course_id = $faker->randomElement($courses);
            $taken->civil_servant_id = $faker->randomElement($servants);
            $taken->start_at = $faker->dateTimeBetween('-1 year', 'now');
            $taken->end_at = $faker->dateTimeBetween('now', '1 year');
            $taken->score = $faker->randomFloat(2, 0, 10);
            $taken->save();
        }

    }
}
