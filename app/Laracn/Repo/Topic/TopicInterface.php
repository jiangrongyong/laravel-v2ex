<?php namespace Laracn\Repo\Topic;

interface TopicInterface {

    public function byId($id);

    public function create(array $data);

    public function update(array $data);

    public function byNodeId($node_id, $perPage = 3);

}