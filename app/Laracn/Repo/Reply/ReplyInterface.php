<?php namespace Laracn\Repo\Reply;

interface ReplyInterface {

    public function byTopicIdEnd($topicId);

    public function byTopicIdsEnd(array $topicIds);

}