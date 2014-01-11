<?php

class TopicSeeder extends DatabaseSeeder {

    public function run() {
        $topics = [
            [
                'title' => 'php artisan list',
                'content' => 'php artisan list',
                'node_id' => '1'
            ],
            [
                'title' => 'composer install',
                'content' => 'composer install',
                'node_id' => '3'
            ],
        ];

        foreach ($topics as $topic) {
            Topic::create($topic);
        }
    }
}