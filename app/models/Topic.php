<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Topic extends Eloquent {

    protected $table = "topics";

    public function node() {
        return $this->belongsTo('Node');
    }

    public function replies() {
        return $this->hasMany('Reply');
    }

    public function user() {
        return $this->belongsTo('User');
    }

}