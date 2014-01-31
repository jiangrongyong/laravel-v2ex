<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * @property mixed content
 * @property mixed id
 * @property mixed title
 * @property mixed node_id
 * @property mixed user_id
 */
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

    public function getCreatedAtDiffForHumans() {
        return $this->created_at->diffForHumans($this->freshTimestamp());
    }

    public function getUpdateAtDiffForHumans() {
        return $this->updated_at->diffForHumans($this->freshTimestamp());
    }
}