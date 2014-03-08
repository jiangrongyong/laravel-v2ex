<?php

class UserSeeder extends DatabaseSeeder {

    public function run() {
        $faker = Faker\Factory::create();

        User::create([
            'username' => 'jiangrongyong',
            'password' => 'kingsoft',
            'email' => 'jiangrongyong@gmail.com'
        ]);

        for ($i = 0; $i < 10; $i++) {
            $user = [
                'username' => $faker->username,
                'password' => 'kingsoft',
                'email' => $faker->email
            ];
            User::create($user);
        }
    }
}