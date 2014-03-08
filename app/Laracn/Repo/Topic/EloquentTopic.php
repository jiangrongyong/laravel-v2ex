<?php namespace Laracn\Repo\Topic;

use Laracn\Repo\RepoAbstract;
use Laracn\Repo\Node\NodeInterface;
use Illuminate\Database\Eloquent\Model;
use Laracn\Repo\User\UserInterface;

class EloquentTopic extends RepoAbstract implements TopicInterface {

    protected $topic;
    protected $node;
    protected $user;

    public function __construct(Model $topic, NodeInterface $node, UserInterface $user) {
        $this->topic = $topic;
        $this->node = $node;
        $this->user = $user;
    }

    public function byId($id) {
        return $this->topic->find($id);
    }

    public function byNodeId($node_id, $perPage = 3) {
        $node = $this->node->byId($node_id);
        return $node->topics()->orderBy('updated_at', 'desc')->paginate($perPage);
    }

    public function byUserId($user_id, $perPage = 3) {
        $user = $this->user->byId($user_id);
        return $user->topics()->orderBy('updated_at', 'desc')->paginate($perPage);
    }

    public function byPage($perPage = 3) {
        return $this->topic->orderBy('updated_at', 'desc')->paginate($perPage);
    }

    public function create(array $data) {
        $this->topic->title = $data['title'];
        $this->topic->content = $data['content'];
        $this->topic->node_id = $data['node_id'];
        $this->topic->user_id = $data['user_id'];

        $this->topic->save();

        return $this->topic;
    }

    public function update(array $data) {
        $topic = $this->topic->find($data['id']);
        $topic->title = $data['title'];
        $topic->content = $data['content'];

        $topic->save();

        return $topic;
    }

}