<?php

class FavoriteTopicSeeder extends DatabaseSeeder {

    public function run() {
        $favoriteTopics = [
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

        foreach ($favoriteTopics as $favoriteTopic) {
            FavoriteTopic::create($favoriteTopic);
        }
    }
}