<?php namespace Laracn\Repo\Node;

use Laracn\Repo\RepoAbstract;
use Illuminate\Database\Eloquent\Model;

class EloquentNode extends RepoAbstract implements NodeInterface {

    protected $node;

    public function __construct(Model $node) {
        $this->node = $node;
    }

    public function byId($node_id) {
        return $this->node->with('topics.user')->find($node_id);
    }
}