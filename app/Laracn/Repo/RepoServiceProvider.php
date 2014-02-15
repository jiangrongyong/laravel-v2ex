<?php namespace Laracn\Repo;

use Laracn\Repo\Favorite\EloquentFavorite;
use Topic;
use Node;
use Reply;
use User;
use FavoriteNode;
use FavoriteTopic;
use FavoriteUser;
use Laracn\Repo\Topic\EloquentTopic;
use Laracn\Repo\Node\EloquentNode;
use Laracn\Repo\Reply\EloquentReply;
use Laracn\Repo\User\EloquentUser;
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

        $app->bind('Laracn\Repo\User\UserInterface', function ($app) {
            $user = new EloquentUser(
                new User()
            );

            return $user;
        });

        $app->bind('Laracn\Repo\Favorite\FavoriteInterface', function ($app) {
            $favorite = new EloquentFavorite(
                new FavoriteNode(), new FavoriteTopic(), new FavoriteUser(), new EloquentUser(new User)
            );

            return $favorite;
        });
    }
}