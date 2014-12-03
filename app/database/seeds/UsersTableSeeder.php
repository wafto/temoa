<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();
        $password = Hash::make('secret');

        User::truncate();
        Admin::truncate();
        DependencyAdmin::truncate();
        Partner::truncate();
        CivilServant::truncate();

        $usedEmails = [];

        $factoryUser = function() use ($faker, $password, &$usedEmails) {
            $email = $faker->email;
            if (isset($usedEmails[$email])) {
                $usedEmails[$email] = $usedEmails[$email] + 1;
                $email = sprintf('%s%s', $usedEmails[$email], $email);
            } else {
                $usedEmails[$email] = 0;
            }
            $user = new User();
            $user->email = $email;
            $user->password = $password;
            $user->ext = $faker->randomNumber(3);
            $user->phone = $faker->phoneNumber;
            $user->mobile_phone = $faker->phoneNumber;
            $user->linkedIn = '';
            $user->active = $faker->boolean(80);
            return $user;
        };

        $factory = function($type, array $data) use ($faker, $factoryUser) {
            $instance = new $type();
            foreach ($data as $key => $value) {
                $instance->$key = $value;
            }
            $instance->save();
            $instance->user()->save($factoryUser());
        };

        $rfcMaker = function() use ($faker) {
            $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.
                       'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.
                       'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.
                       'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $first = substr(str_shuffle($letters), 0, 4);
            $last = substr(str_shuffle($letters), 0, 2);
            $date = $faker->dateTimeBetween('-60 years', '-18 years');
            return sprintf('%s%s%s%s', $first, $date->format('ymd'), $last, $faker->randomDigitNotNull);
        };

        $dependencies = Dependency::lists('id');

        foreach (range(1, 600) as $index)
        {
            $factory('Admin', []);

            $factory('DependencyAdmin', [
                'dependency_id' => $faker->randomElement($dependencies),
            ]);

            $factory('Partner', [
                'business_name' => $faker->company,
                'responsable' => $faker->name,
                'rfc' => $rfcMaker(),
                'specialty_area' => $faker->word,
            ]);

            $factory('CivilServant', [
                'name' => $faker->firstName,
                'surnames' => $faker->lastName,
                'dependency_id' => $faker->randomElement($dependencies),
                'area' => $faker->word,
                'job' => $faker->word,
                'job_from' => $faker->dateTimeBetween('-10 years', 'now'),
                'plan_objectives' => $faker->text,
            ]);
        }

    }
}
