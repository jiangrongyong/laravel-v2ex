<?php namespace Laracn\Repo\Favorite;

use Laracn\Repo\RepoAbstract;
use Illuminate\Database\Eloquent\Model;
use Laracn\Repo\User\UserInterface;

class EloquentFavorite extends RepoAbstract implements FavoriteInterface {

    protected $favoriteNode;
    protected $favoriteTopic;
    protected $favoriteUser;
    protected $user;

    public function __construct(Model $favoriteNode, Model $favoriteTopic, Model $favoriteUser, UserInterface $user) {
        $this->favoriteNode = $favoriteNode;
        $this->favoriteTopic = $favoriteTopic;
        $this->favoriteUser = $favoriteUser;
        $this->user = $user;
    }

    public function nodeTotal($user_id) {
        return $this->favoriteNode->whereUserId($user_id)->count();
    }

    public function topicTotal($user_id) {
        return $this->favoriteTopic->whereUserId($user_id)->count();
    }

    public function userTotal($user_id) {
        return $this->favoriteUser->whereUserId($user_id)->count();
    }

    public function nodes($user_id) {
        return $this->user->favoriteNodes($user_id);
    }

    public function topics($user_id) {
        return $this->user->favoriteTopics($user_id);
    }

    public function users($user_id) {
        return $this->user->followings($user_id);
    }
}