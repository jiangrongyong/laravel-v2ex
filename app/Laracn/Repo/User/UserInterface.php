<?php namespace Laracn\Repo\User;

interface UserInterface {

    public function byId($id);

    public function byUsername($username);

    public function topics($user_id, $perPage = 3);

    public function replies($user_id, $perPage = 3);

    public function favoriteNodes($user_id, $perPage = 2);

    public function favoriteTopics($user_id, $perPage = 2);

    public function followings($user_id, $perPage = 2);

    public function setting($user_id);

    public function follow($follow_user_id, $user_id);

    public function unfollow($follow_user_id, $user_id);

    public function isFollowing($follow_user_id, $user_id);
}