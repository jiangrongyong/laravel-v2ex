<?php namespace Laracn\Repo\Favorite;

use Laracn\Repo\RepoAbstract;
use Illuminate\Database\Eloquent\Model;

class EloquentFavorite extends RepoAbstract implements FavoriteInterface {

    protected $favoriteNode;
    protected $favoriteTopic;
    protected $favoriteUser;

    public function __construct(Model $favoriteNode, Model $favoriteTopic, Model $favoriteUser) {
        $this->favoriteNode = $favoriteNode;
        $this->favoriteTopic = $favoriteTopic;
        $this->favoriteUser = $favoriteUser;
    }

    public function nodeCounts($user_id) {
        return $this->favoriteNode->whereUserId($user_id)->count();
    }

    public function topicCounts($user_id) {
        return $this->favoriteTopic->whereUserId($user_id)->count();
    }

    public function userCounts($user_id) {
        return $this->favoriteUser->whereUserId($user_id)->count();
    }

    public function nodes($user_id) {

    }

    public function topics($user_id) {

    }

    public function users($user_id) {

    }
}