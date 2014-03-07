<?php namespace Laracn\Repo\Follow;

interface FollowInterface {

    public function byUserId($user_id, $perPage = 2);

    public function totalByUserId($user_id);

    public function byUserIdFollowUserId($user_id, $follow_user_id);

    public function create($follow_user_id, $user_id);

    public function delete($follow_user_id, $user_id);

}