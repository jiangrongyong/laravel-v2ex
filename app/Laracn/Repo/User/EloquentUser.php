<?php namespace Laracn\Repo\User;

use Laracn\Repo\RepoAbstract;
use Illuminate\Database\Eloquent\Model;

class EloquentUser extends RepoAbstract implements UserInterface {

    protected $user;

    public function __construct(Model $user) {
        $this->user = $user;
    }

    public function byId($id) {
        return $this->user->find($id);
    }

    public function byUsername($username) {
        return $this->user->whereUsername($username)->first();
    }

    public function topics($user_id, $perPage = 3) {
        $user = $this->user->find($user_id);
        return $user->topics()->orderBy('updated_at', 'desc')->paginate($perPage);
    }
}