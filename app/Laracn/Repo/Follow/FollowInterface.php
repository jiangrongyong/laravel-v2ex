<?php namespace Laracn\Repo\Follow;

interface FollowInterface {

    public function followingTotal($user_id);

    public function followings($user_id);

}