<?php namespace Laracn\Repo\Favorite;

use Carbon\Carbon;
use Laracn\Repo\RepoAbstract;
use Illuminate\Database\Eloquent\Model;
use Laracn\Repo\User\UserInterface;

class EloquentFavorite extends RepoAbstract implements FavoriteInterface {

    protected $favorite;
    protected $user;

    public function __construct(Model $favorite, UserInterface $user) {
        $this->favorite = $favorite;
        $this->user = $user;
    }

    public function byUserId($user_id, $perPage = 2) {
        $user = $this->user->byId($user_id);
        return $user->favorites()->orderBy('created_at', 'desc')->paginate($perPage);
    }

    public function totalByUserId($user_id) {
        return $this->favorite->whereUserId($user_id)->count();
    }

    public function create($topic_id, $user_id) {
        $user = $this->user->byId($user_id);
        $user->favorites()->attach($topic_id, [
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);
    }

    public function delete($topic_id, $user_id) {
        $user = $this->user->byId($user_id);
        $user->favorites()->detach($topic_id);
    }

}