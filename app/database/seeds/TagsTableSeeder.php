<?php

class TagsTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        $tags = [];

        DB::table('tags')->truncate();

        foreach (range(1, 1000) as $index)
        {
            $name = $faker->word;

            if (isset($tags[$name]))
            {
                $tags[$name] += 1;
                $name = sprintf('%s%s', $name, $tags[$name]);
            }
            else
            {
                $tags[$name] = 0;
            }

            $tag = new Tag();
            $tag->name = $name;
            $tag->save();
        }
    }
}
