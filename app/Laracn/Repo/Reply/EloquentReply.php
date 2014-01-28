<?php namespace Laracn\Repo\Reply;

use Laracn\Repo\RepoAbstract;
use Illuminate\Database\Eloquent\Model;

class EloquentReply extends RepoAbstract implements ReplyInterface {

    protected $reply;

    public function __construct(Model $reply) {
        $this->reply = $reply;
    }

    public function byTopicIdEnd() {

    }
}