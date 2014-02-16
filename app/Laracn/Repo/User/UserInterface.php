<?php namespace Laracn\Repo\User;

interface UserInterface {

    public function byId($id);

    public function byUsername($username);

    public function topics($user_id, $perPage = 3);

    public function replies($user_id, $perPage = 3);

    public function favoriteNodes($user_id, $perPage = 2);

    public function favoriteTopics($user_id, $perPage = 2);

    public function favoriteUsers($user_id, $perPage = 2);
}