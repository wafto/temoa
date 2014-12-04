<?php

class DesiredCoursesTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        DesiredCourse::truncate();

        $courses = Course::lists('id');
        $servants = CivilServant::lists('id');

        foreach (range(1, 800) as $index)
        {
            $desired = new DesiredCourse();
            $desired->course_id = $faker->randomElement($courses);
            $desired->civil_servant_id = $faker->randomElement($servants);
            $desired->save();
        }

    }
}
