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
}