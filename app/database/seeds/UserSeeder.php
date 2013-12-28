<?php

class UserSeeder extends DatabaseSeeder {
    public function run() {
        $users = [
            [
                "username" => "christopher.pitt",
                "password" => Hash::make("7h3¡MOST!53cu23"),
                "email" => "chris@example.com"
            ],
            [
                "username" => "jiangrongyong",
                "password" => Hash::make("kingsoft"),
                "email" => "jiangrongyong@gmail.com"
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}