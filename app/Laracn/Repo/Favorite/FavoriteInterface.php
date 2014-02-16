<?php namespace Laracn\Repo\Favorite;

interface FavoriteInterface {

    public function nodeTotal($user_id);

    public function topicTotal($user_id);

    public function userTotal($user_id);

    public function nodes($user_id);

    public function topics($user_id);

    public function users($user_id);

}