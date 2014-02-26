<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Node extends Eloquent {

    protected $table = "nodes";

    public function topics() {
        return $this->hasMany('Topic');
    }

}