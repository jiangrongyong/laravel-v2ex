<?php namespace Laracn\Repo\Reply;

interface ReplyInterface {

    public function byTopicEnd($topicId);

    public function totalByTopic($topicId);

}