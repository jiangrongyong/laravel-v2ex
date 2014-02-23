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

    public function topics($node_id, $perPage = 3) {
        $node = $this->node->find($node_id);
        return $node->topics()->orderBy('updated_at', 'desc')->paginate($perPage);
    }

    public function favorite($node_id, $user_id) {
        $node = $this->node->find($node_id);
        $node->favorites()->attach($user_id, [
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);
    }
}