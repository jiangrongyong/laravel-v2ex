<?php namespace Laracn\Repo\Favorite;

interface FavoriteInterface {

    public function total($user_id);

    public function byUserId($user_id);

}