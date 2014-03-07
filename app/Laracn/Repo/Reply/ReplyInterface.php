<?php namespace Laracn\Repo\Reply;

interface ReplyInterface {

    public function byUserId($user_id, $perPage = 3);

    public function byTopicEnd($topicId);

    public function totalByTopic($topicId);

}