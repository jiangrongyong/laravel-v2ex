<?php namespace Laracn\Repo\Node;

use Laracn\Repo\RepoAbstract;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class EloquentNode extends RepoAbstract implements NodeInterface {

    protected $node;

    public function __construct(Model $node) {
        $this->node = $node;
    }

    public function byId($node_id) {
        return $this->node->find($node_id);
    }

    public function all() {
        return $this->node->get();
    }

}