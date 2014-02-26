<?php namespace Laracn\Repo\Follow;

use Laracn\Repo\RepoAbstract;
use Illuminate\Database\Eloquent\Model;
use Laracn\Repo\User\UserInterface;

class EloquentFollow extends RepoAbstract implements FollowInterface {

    protected $follow;
    protected $user;

    public function __construct(Model $follow, UserInterface $user) {
        $this->follow = $follow;
        $this->user = $user;
    }

    public function followingTotal($user_id) {
        return $this->follow->whereUserId($user_id)->count();
    }

    public function followings($user_id) {
        return $this->user->followings($user_id);
    }
}