<?php namespace Laracn\Repo\User;

interface UserInterface {

    public function byId($id);

    public function byUsername($username);

    public function topics($user_id, $perPage = 3);
}