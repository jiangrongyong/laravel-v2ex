<?php

class FavoriteNodeSeeder extends DatabaseSeeder {

    public function run() {
        $favoriteNodes = [
            [
                'user_id' => 1,
                'node_id' => 1
            ],
            [
                'user_id' => 1,
                'node_id' => 2
            ],
            [
                'user_id' => 1,
                'node_id' => 3
            ],
        ];

        foreach ($favoriteNodes as $favoriteNode) {
            FavoriteNode::create($favoriteNode);
        }
    }
}