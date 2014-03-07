<?php namespace Laracn\Repo\User;

use Laracn\Repo\RepoAbstract;
use Illuminate\Database\Eloquent\Model;

class EloquentUser extends RepoAbstract implements UserInterface {

    protected $user;

    public function __construct(Model $user) {
        $this->user = $user;
    }

    // User

    public function byId($id) {
        return $this->user->find($id);
    }

    public function byUsername($username) {
        return $this->user->whereUsername($username)->first();
    }

    // Follow

    public function isFollowing($follow_user_id, $user_id) {
        $user = $this->user->find($user_id);
        return !is_null($user->followings()->where('follow_user_id', $follow_user_id)->first());
    }

}