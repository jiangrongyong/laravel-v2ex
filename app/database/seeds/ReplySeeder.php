<?php

class ReplySeeder extends DatabaseSeeder {

    public function run() {
        $replies = [
            [
                'content' => 'Mark it',
                'topic_id' => '1'
            ],
            [
                'content' => 'Cool',
                'topic_id' => '1'
            ],
        ];

        foreach ($replies as $reply) {
            Reply::create($reply);
        }
    }
}