<?php

class UserSeeder extends DatabaseSeeder {

    public function run() {
        $users = [
            [
                'username' => 'jiangrongyong',
                'password' => 'kingsoft',
                'email' => 'jiangrongyong@gmail.com'
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}