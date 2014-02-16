<?php

class TopicSeeder extends DatabaseSeeder {

    public function run() {
        $topics = [
            [
                'title' => 'php artisan list',
                'content' => 'php artisan list',
                'node_id' => '1',
                'user_id' => '1',
                'replies_total' => 2,
                'reply_end_user_id' => 1
            ],
            [
                'title' => 'composer install',
                'content' => 'composer install',
                'node_id' => '1',
                'user_id' => '1',
            ],
            [
                'title' => 'Podcast #9 - Taylor Otwell and Jeffrey Way',
                'content' => 'composer install',
                'node_id' => '1',
                'user_id' => '1',
            ],
            [
                'title' => 'Podcast #8 - Laracasts, Laravel 4.1, LaraconUS, teasers and more',
                'content' => 'composer install',
                'node_id' => '1',
                'user_id' => '1',
            ],
            [
                'title' => 'What I\'ve Been Watching #2',
                'content' => 'composer install',
                'node_id' => '1',
                'user_id' => '1',
            ],
            [
                'title' => 'Podcast #7 with Matthew Machuga and Jeroen van der Gulik (aka n0xie)',
                'content' => 'composer install',
                'node_id' => '1',
                'user_id' => '1',
            ],
            [
                'title' => 'Laravel Weekly #26',
                'content' => 'composer install',
                'node_id' => '1',
                'user_id' => '1',
            ],
        ];

        foreach ($topics as $topic) {
            Topic::create($topic);
        }
    }
}