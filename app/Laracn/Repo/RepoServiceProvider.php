<?php namespace Laracn\Repo;

use Laracn\Repo\Node\EloquentNode;
use Topic;
use Node;
use Laracn\Repo\Topic\EloquentTopic;
use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $app = $this->app;

        $app->bind('Laracn\Repo\Topic\TopicInterface', function ($app) {
            $topic = new EloquentTopic(
                new Topic(), new EloquentNode(new Node())
            );

            return $topic;
        });

        $app->bind('Laracn\Repo\Node\NodeInterface', function ($app) {
            $node = new EloquentNode(
                new Node()
            );

            return $node;
        });
    }
}