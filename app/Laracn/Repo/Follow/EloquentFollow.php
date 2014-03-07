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

    public function byUserId($user_id, $perPage = 2) {
        $user = $this->user->byId($user_id);
        return $user->followings()->orderBy('created_at', 'desc')->paginate($perPage);
    }

    public function followingTotal($user_id) {
        return $this->follow->whereUserId($user_id)->count();
    }

}