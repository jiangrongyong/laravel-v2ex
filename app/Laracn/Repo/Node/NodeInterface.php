<?php namespace Laracn\Repo\Node;

interface NodeInterface {

    public function byId($node_id);

    public function topics($node_id);

}