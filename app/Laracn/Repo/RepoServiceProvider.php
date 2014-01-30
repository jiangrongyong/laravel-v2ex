<?php namespace Laracn\Repo;

use Topic;
use Node;
use Reply;
use Laracn\Repo\Topic\EloquentTopic;
use Laracn\Repo\Node\EloquentNode;
use Laracn\Repo\Reply\EloquentReply;
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
                new Topic(), new EloquentNode(new Node()), new EloquentReply(new Reply())
            );

            return $topic;
        });

        $app->bind('Laracn\Repo\Node\NodeInterface', function ($app) {
            $node = new EloquentNode(
                new Node()
            );

            return $node;
        });

        $app->bind('Laracn\Repo\Reply\ReplyInterface', function ($app) {
            $node = new EloquentReply(
                new Reply()
            );

            return $node;
        });
    }
}