<?php

class AgendaTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        $couses = Course::all();

        foreach ($couses as $course)
        {
            $course->agenda = $faker->text(1200);
            $course->save();
        }
    }
}
