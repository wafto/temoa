<?php

class RecommendedCoursesTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        RecommendedCourse::truncate();

        $courses = Course::lists('id');
        $servants = CivilServant::lists('id');

        foreach (range(1, 800) as $index)
        {
            $recommended = new RecommendedCourse();
            $recommended->course_id = $faker->randomElement($courses);
            $recommended->civil_servant_id = $faker->randomElement($servants);
            $recommended->save();
        }

    }
}
