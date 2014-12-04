<?php

class CoursesTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        Course::truncate();

        $categories = Category::lists('id');
        $partners = Partner::lists('id');

        $internals = [];
        $externals = [];

        foreach (range(0, 1000) as $index)
        {
            $internal = substr($faker->md5, 0, 12);
            if (isset($internals[$internal])) {
                $internal = sprintf('%s%s', $internal, $internals[$internal] += 1);
            } else {
                $internals[$internal] = 1;
            }

            $external = substr($faker->md5, 0, 12);
            if (isset($externals[$external])) {
                $external = sprintf('%s%s', $external, $externals[$external] += 1);
            } else {
                $externals[$external] = 1;
            }

            $course = new Course();
            $course->internal_number = $internal;
            $course->external_number = $external;
            $course->name = $faker->sentence;
            $course->description = $faker->text;
            $course->duration = $faker->randomElement([4, 8, 16, 32, 40, 48, 80]);
            $course->format = $faker->randomElement(['presencial', 'línea']);
            $course->visible = $faker->boolean(90);
            $course->cancelled = $faker->boolean(90);
            $course->category_id = $faker->randomElement($categories);
            $course->partner_id = $faker->randomElement($partners);

            $course->save();
        }
    }
}
