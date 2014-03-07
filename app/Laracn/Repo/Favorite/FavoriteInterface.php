<?php namespace Laracn\Repo\Favorite;

interface FavoriteInterface {

    public function totalByUserId($user_id);

    public function byUserId($user_id);

}