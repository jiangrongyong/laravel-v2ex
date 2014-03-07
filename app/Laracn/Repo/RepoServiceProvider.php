<?php namespace Laracn\Repo;

use Topic;
use Node;
use Reply;
use User;
use Favorite;
use Follow;
use Setting;
use Laracn\Repo\Topic\EloquentTopic;
use Laracn\Repo\Node\EloquentNode;
use Laracn\Repo\Reply\EloquentReply;
use Laracn\Repo\User\EloquentUser;
use Laracn\Repo\Favorite\EloquentFavorite;
use Laracn\Repo\Setting\EloquentSetting;
use Laracn\Repo\Follow\EloquentFollow;
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
                new Topic(), new EloquentNode(new Node()), new EloquentUser(new User())
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
                new Favorite(), new EloquentUser(new User())
            );

            return $favorite;
        });

        $app->bind('Laracn\Repo\Setting\SettingInterface', function ($app) {
            $setting = new EloquentSetting(
                new Setting(), new EloquentUser(new User())
            );

            return $setting;
        });

        $app->bind('Laracn\Repo\Follow\FollowInterface', function ($app) {
            $follow = new EloquentFollow(
                new Follow(), new EloquentUser(new User())
            );

            return $follow;
        });
    }
}