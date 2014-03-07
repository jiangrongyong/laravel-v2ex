<?php namespace Laracn\Repo\User;

interface UserInterface {

    public function byId($id);

    public function byUsername($username);

}