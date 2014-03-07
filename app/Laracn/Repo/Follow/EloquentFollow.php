<?php namespace Laracn\Repo\Follow;

use Carbon\Carbon;
use Laracn\Repo\RepoAbstract;
use Illuminate\Database\Eloquent\Model;
use Laracn\Repo\User\UserInterface;

class EloquentFollow extends RepoAbstract implements FollowInterface {

    protected $follow;
    protected $user;

    public function __construct(Model $follow, UserInterface $user) {
        $this->follow = $follow;
        $this->user = $user;
    }

    public function byUserId($user_id, $perPage = 2) {
        $user = $this->user->byId($user_id);
        return $user->followings()->orderBy('created_at', 'desc')->paginate($perPage);
    }

    public function totalByUserId($user_id) {
        return $this->follow->whereUserId($user_id)->count();
    }

    public function byUserIdFollowUserId($user_id, $follow_user_id) {
        return !is_null($this->follow->where('user_id', $user_id)
            ->where('follow_user_id', $follow_user_id)->first());
    }

    public function create($follow_user_id, $user_id) {
        $user = $this->user->byId($user_id);
        $user->followings()->attach($follow_user_id, [
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);
    }

    public function delete($follow_user_id, $user_id) {
        $user = $this->user->byId($user_id);
        $user->followings()->detach($follow_user_id);
    }

}