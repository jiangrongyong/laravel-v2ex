<?php

class NodeSeeder extends DatabaseSeeder {

    public function run() {
        $nodes = [
            [
                'name' => 'artisan',
                'header' => 'Artisan is the name of the command-line interface included with Laravel. It provides a number of helpful commands for your use while developing your application.'
            ],
            [
                'name' => 'model',
                'header' => 'The Eloquent ORM included with Laravel provides a beautiful, simple ActiveRecord implementation for working with your database. Each database table has a corresponding "Model" which is used to interact with that table.'
            ],
            [
                'name' => 'composer',
                'header' => 'Dependency Manager for PHP.'
            ],
        ];

        foreach ($nodes as $node) {
            Node::create($node);
        }
    }
}