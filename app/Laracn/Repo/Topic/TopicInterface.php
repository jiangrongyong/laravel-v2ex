<?php namespace Laracn\Repo\Topic;

interface TopicInterface {

    public function byId($id);

    public function update(array $data);
}