<?php

class InterestsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('interests')->truncate();

        $categories = Category::lists('id');
        $servants = CivilServant::lists('id');
        $size = count($categories);

        foreach ($servants as $servantId)
        {
            shuffle($categories);
            $categoriesIds = array_slice($categories, 0, rand(1, $size));

            foreach ($categoriesIds as $id)
            {
                DB::table('interests')->insert([
                    'category_id' => $id,
                    'civil_servant_id' => $servantId,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ]);
            }
        }
    }
}
