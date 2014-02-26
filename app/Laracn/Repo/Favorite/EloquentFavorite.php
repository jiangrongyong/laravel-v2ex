<?php namespace Laracn\Repo\Favorite;

use Laracn\Repo\RepoAbstract;
use Illuminate\Database\Eloquent\Model;
use Laracn\Repo\User\UserInterface;

class EloquentFavorite extends RepoAbstract implements FavoriteInterface {

    protected $favorite;
    protected $user;

    public function __construct(Model $favorite, UserInterface $user) {
        $this->favorite = $favorite;
        $this->user = $user;
    }

    public function total($user_id) {
        return $this->favorite->whereUserId($user_id)->count();
    }

    public function byUserId($user_id) {
        return $this->user->favorites($user_id);
    }

}