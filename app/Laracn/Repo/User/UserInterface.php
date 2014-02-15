<?php namespace Laracn\Repo\User;

interface UserInterface {

    public function byId($id);

    public function byUsername($username);

    public function topics($user_id, $perPage = 3);

    public function replies($user_id, $perPage = 3);

    public function favoriteNodeCounts($id);

    public function favoriteTopicCounts($id);

    public function favoriteUserCounts($id);
}