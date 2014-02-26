<?php

class FavoriteSeeder extends DatabaseSeeder {

    public function run() {
        $favorites = [
            [
                'user_id' => 1,
                'topic_id' => 1
            ],
            [
                'user_id' => 1,
                'topic_id' => 2
            ],
            [
                'user_id' => 1,
                'topic_id' => 3
            ],
        ];

        foreach ($favorites as $favorite) {
            Favorite::create($favorite);
        }
    }
}