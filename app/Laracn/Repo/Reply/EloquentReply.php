<?php namespace Laracn\Repo\Reply;

use Laracn\Repo\RepoAbstract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class EloquentReply extends RepoAbstract implements ReplyInterface {

    protected $reply;

    public function __construct(Model $reply) {
        $this->reply = $reply;
    }

    public function byTopicIdEnd($topicId) {
        return $this->reply->where('topic_id', $topicId)->orderBy('created_at', 'desc')->limit(1)->first();
    }

    public function byTopicIdsEnd(array $topicIds) {
        $replies = new Collection();
        foreach ($topicIds as $topicId) {
            $reply = $this->byTopicIdEnd($topicId);
            $replies->put($topicId, $reply);
        }
        return $replies;
    }
}