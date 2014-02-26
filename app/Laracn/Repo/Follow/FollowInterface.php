<?php namespace Laracn\Repo\Follow;

interface FollowInterface {

    public function followingsTotal($user_id);

    public function followings($user_id);

}