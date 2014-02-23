<?php namespace Laracn\Repo\Node;

interface NodeInterface {

    public function byId($node_id);

    public function topics($node_id);

    public function favorite($node_id, $user_id);

    public function unfavorite($node_id, $user_id);

}