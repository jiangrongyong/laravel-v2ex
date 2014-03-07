<?php namespace Laracn\Repo\Follow;

interface FollowInterface {

    public function byUserId($user_id, $perPage = 2);

    public function totalByUserId($user_id);

}