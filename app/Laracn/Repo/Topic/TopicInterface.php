<?php namespace Laracn\Repo\Topic;

interface TopicInterface {

    public function byId($id);

    public function create(array $data);

    public function update(array $data);

    public function favorite($topic_id, $user_id);

    public function unfavorite($topic_id, $user_id);

    public function isFavorite($topic_id, $user_id);
}