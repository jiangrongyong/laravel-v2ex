<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    protected $table = "users";

    protected $guarded = array('id', 'created_at', 'updated_at');

    public function getAuthIdentifier() {
        return $this->getKey();
    }

    public function getAuthPassword() {
        return $this->password;
    }

    public function getReminderEmail() {
        return $this->email;
    }

    public function setPasswordAttribute($value) {
        $this->attributes['password'] = Hash::make($value);
    }

    public function getAvatar($size) {
        return Gravatar::src($this->email, $size);
    }

    public function topics() {
        return $this->hasMany('Topic');
    }

    public function replies() {
        return $this->hasMany('Reply');
    }

    public function favoriteNodes() {
        return $this->belongsToMany('Node', 'favorite_nodes', 'user_id', 'node_id');
    }

    public function favoriteTopics() {
        return $this->belongsToMany('Topic', 'favorite_topics', 'user_id', 'topic_id');
    }

    public function favoriteUsers() {
        return $this->belongsToMany('User', 'favorite_users', 'user_id', 'follow_user_id');
    }

    public function setting() {
        return $this->hasOne('Setting');
    }

}