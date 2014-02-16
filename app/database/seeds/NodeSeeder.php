<?php

class NodeSeeder extends DatabaseSeeder {

    public function run() {
        $nodes = [
            [
                'name' => 'artisan',
                'header' => 'Artisan is the name of the command-line interface included with Laravel. It provides a number of helpful commands for your use while developing your application.',
                'topics_total' => 7,
                'avatar' => 'https://pbs.twimg.com/profile_images/3631880837/74c5dd82a8b5540ab7dd4ce30fc0a2f6_bigger.png',
            ],
            [
                'name' => 'model',
                'header' => 'The Eloquent ORM included with Laravel provides a beautiful, simple ActiveRecord implementation for working with your database. Each database table has a corresponding "Model" which is used to interact with that table.',
                'avatar' => 'https://pbs.twimg.com/profile_images/3631880837/74c5dd82a8b5540ab7dd4ce30fc0a2f6_bigger.png',
            ],
            [
                'name' => 'composer',
                'header' => 'Dependency Manager for PHP.',
                'avatar' => 'https://pbs.twimg.com/profile_images/3631880837/74c5dd82a8b5540ab7dd4ce30fc0a2f6_bigger.png',
            ],
        ];

        foreach ($nodes as $node) {
            Node::create($node);
        }
    }
}