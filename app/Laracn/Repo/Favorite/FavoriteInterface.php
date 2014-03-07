<?php namespace Laracn\Repo\Favorite;

interface FavoriteInterface {

    public function byUserId($user_id);

    public function totalByUserId($user_id);

    public function create($topic_id, $user_id);

    public function delete($topic_id, $user_id);

}