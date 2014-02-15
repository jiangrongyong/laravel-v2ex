<?php namespace Laracn\Repo\Favorite;

interface FavoriteInterface {

    public function nodeCounts($user_id);

    public function topicCounts($user_id);

    public function userCounts($user_id);

    public function nodes($user_id);

    public function topics($user_id);

    public function users($user_id);

}