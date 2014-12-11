<?php

class CoursesTagsTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        $courses = Course::lists('id');
        $tags = Tag::lists('id');

        foreach (range(1, 2000) as $index)
        {
            DB::table('courses_tags')->insert([
                'course_id' => $faker->randomElement($courses),
                'tag_id' => $faker->randomElement($tags),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        }
    }
}
