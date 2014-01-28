<?php namespace Laracn\Repo\Topic;

use Laracn\Repo\RepoAbstract;
use Illuminate\Database\Eloquent\Model;

class EloquentTopic extends RepoAbstract implements TopicInterface {

    protected $topic;

    public function __construct(Model $topic) {
        $this->topic = $topic;
    }

    public function byId($id) {
        return $this->topic->with('replies.user')->with('user')->find($id);
    }

    public function update(array $data) {
        $topic = $this->topic->find($data['id']);
        $topic->title = $data['title'];
        $topic->content = $data['content'];

        $topic->save();

        return $topic;
    }
}