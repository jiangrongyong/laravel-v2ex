<?php namespace Laracn\Repo\Reply;

use Laracn\Repo\RepoAbstract;
use Illuminate\Database\Eloquent\Model;
use Laracn\Repo\User\UserInterface;

class EloquentReply extends RepoAbstract implements ReplyInterface {

    protected $reply;

    protected $user;

    public function __construct(Model $reply, UserInterface $user) {
        $this->reply = $reply;
        $this->user = $user;
    }

    public function byUserId($user_id, $perPage = 3) {
        $user = $this->user->byId($user_id);
        return $user->replies()->orderBy('updated_at', 'desc')->paginate($perPage);
    }

    public function byTopicEnd($topicId) {
        return $this->reply->with('user')->where('topic_id', $topicId)->orderBy('created_at', 'desc')->limit(1)->first();
    }

    public function totalByTopic($topicId) {
        return $this->reply->where('topic_id', $topicId)->count();
    }
}