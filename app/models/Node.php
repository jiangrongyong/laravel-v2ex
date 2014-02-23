<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Node extends Eloquent {

    protected $table = "nodes";

    public function topics() {
        return $this->hasMany('Topic');
    }

    public function favorites() {
        return $this->belongsToMany('User', 'favorite_nodes', 'node_id', 'user_id');
    }

}