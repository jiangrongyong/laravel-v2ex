<?php namespace Laracn\Repo\Reply;

use Laracn\Repo\RepoAbstract;
use Illuminate\Database\Eloquent\Model;

class EloquentReply extends RepoAbstract implements ReplyInterface {

    protected $reply;

    public function __construct(Model $reply) {
        $this->reply = $reply;
    }

    public function byTopicEnd($topicId) {
        return $this->reply->with('user')->where('topic_id', $topicId)->orderBy('created_at', 'desc')->limit(1)->first();
    }

    public function totalByTopic($topicId) {
        return $this->reply->where('topic_id', $topicId)->count();
    }
}