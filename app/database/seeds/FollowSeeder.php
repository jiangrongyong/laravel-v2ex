<?php

class FollowSeeder extends DatabaseSeeder {

    public function run() {
        $follows = [
            [
                'user_id' => 1,
                'follow_user_id' => 1
            ],
        ];

        foreach ($follows as $follow) {
            Follow::create($follow);
        }
    }
}