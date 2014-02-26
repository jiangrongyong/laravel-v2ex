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
        return 'http://cdn.v2ex.com/avatar/b954/66b8/27658_large.png?m=1382157118';
    }

    public function topics() {
        return $this->hasMany('Topic');
    }

    public function replies() {
        return $this->hasMany('Reply');
    }

    public function favorites() {
        return $this->belongsToMany('Topic', 'favorites', 'user_id', 'topic_id');
    }

    public function followings() {
        return $this->belongsToMany('User', 'follows', 'user_id', 'follow_user_id');
    }

    public function setting() {
        return $this->hasOne('Setting');
    }

}