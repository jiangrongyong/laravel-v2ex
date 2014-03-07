<?php namespace Laracn\Repo\User;

interface UserInterface {

    // User

    public function byId($id);

    public function byUsername($username);

    // Follow

    public function isFollowing($follow_user_id, $user_id);
}