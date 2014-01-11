<?php

class NodeSeeder extends DatabaseSeeder {

    public function run() {
        $nodes = [
            [
                'name' => 'artisan',
            ],
            [
                'name' => 'model',
            ],
            [
                'name' => 'composer',
            ],
        ];

        foreach ($nodes as $node) {
            Node::create($node);
        }
    }
}