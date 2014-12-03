<?php

class ContactsTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        Contact::truncate();

        foreach (range(1, 300) as $index)
        {
            $contact = new Contact();
            $contact->name = $faker->name;
            $contact->email = $faker->email;
            $contact->website = $faker->url;
            $contact->title = $faker->sentence;
            $contact->message = $faker->text;
            $contact->save();
        }

    }
}
