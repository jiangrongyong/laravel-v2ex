<?php

class FavoriteUserSeeder extends DatabaseSeeder {

    public function run() {
        $favoriteUsers = [
            [
                'user_id' => 1,
                'follow_user_id' => 1
            ],
            [
                'user_id' => 1,
                'follow_user_id' => 2
            ],
            [
                'user_id' => 1,
                'follow_user_id' => 3
            ],
        ];

        foreach ($favoriteUsers as $favoriteUser) {
            FavoriteUser::create($favoriteUser);
        }
    }
}