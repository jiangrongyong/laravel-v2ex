<?php namespace Laracn\Repo\User;

interface UserInterface {

    public function byId($id);

    public function byUsername($username);

    public function byPage($perPage = 20);

}