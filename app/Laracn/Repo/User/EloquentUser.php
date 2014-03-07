<?php namespace Laracn\Repo\User;

use Laracn\Repo\RepoAbstract;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class EloquentUser extends RepoAbstract implements UserInterface {

    protected $user;

    public function __construct(Model $user) {
        $this->user = $user;
    }

    // User

    public function byId($id) {
        return $this->user->find($id);
    }

    public function byUsername($username) {
        return $this->user->whereUsername($username)->first();
    }

    // Favorite

    public function favorite($topic_id, $user_id) {
        $user = $this->user->find($user_id);
        $user->favorites()->attach($topic_id, [
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);
    }

    public function unfavorite($topic_id, $user_id) {
        $user = $this->user->find($user_id);
        $user->favorites()->detach($topic_id);
    }

    public function isFavoriting($topic_id, $user_id) {
        $user = $this->user->find($user_id);
        return !is_null($user->favorites()->where('topic_id', $topic_id)->first());
    }

    // Follow

    public function followings($user_id, $perPage = 2) {
        $user = $this->user->find($user_id);
        return $user->followings()->orderBy('created_at', 'desc')->paginate($perPage);
    }

    public function follow($follow_user_id, $user_id) {
        $user = $this->user->find($user_id);
        $user->followings()->attach($follow_user_id, [
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);
    }

    public function unfollow($follow_user_id, $user_id) {
        $user = $this->user->find($user_id);
        $user->followings()->detach($follow_user_id);
    }

    public function isFollowing($follow_user_id, $user_id) {
        $user = $this->user->find($user_id);
        return !is_null($user->followings()->where('follow_user_id', $follow_user_id)->first());
    }

}