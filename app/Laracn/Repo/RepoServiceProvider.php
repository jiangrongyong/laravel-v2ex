<?php namespace Laracn\Repo;

use Topic;
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
            $article = new EloquentTopic(
                new Topic()
            );

            return $article;
        });
    }
}