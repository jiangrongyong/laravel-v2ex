<?php

class FavoriteUserSeeder extends DatabaseSeeder {

    public function run() {
        $favoriteUsers = [
            [
                'user_id' => 1,
                'follow_user_id' => 1
            ],
        ];

        foreach ($favoriteUsers as $favoriteUser) {
            FavoriteUser::create($favoriteUser);
        }
    }
}