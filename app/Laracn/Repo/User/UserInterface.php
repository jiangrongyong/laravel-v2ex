<?php namespace Laracn\Repo\User;

interface UserInterface {

    // User

    public function byId($id);

    public function byUsername($username);

    // Reply

    public function replies($user_id, $perPage = 3);

    // Favorite

    public function favorites($user_id, $perPage = 2);

    public function favorite($topic_id, $user_id);

    public function unfavorite($topic_id, $user_id);

    public function isFavoriting($topic_id, $user_id);

    // Follow

    public function followings($user_id, $perPage = 2);

    public function follow($follow_user_id, $user_id);

    public function unfollow($follow_user_id, $user_id);

    public function isFollowing($follow_user_id, $user_id);
}