<?php namespace Laracn\Composer;

use Auth;
use Laracn\Repo\Favorite\FavoriteInterface;
use Laracn\Repo\Follow\FollowInterface;

class LayoutAuthComposer {

    protected $favorite;
    protected $follow;

    public function __construct(FavoriteInterface $favorite, FollowInterface $follow) {
        $this->favorite = $favorite;
        $this->follow = $follow;
    }

    public function compose($view) {
        $user = Auth::user();
        $favoriteTotal = $this->favorite->totalByUserId($user->id);
        $followingTotal = $this->follow->totalByUserId($user->id);

        $view->with(compact('user', 'favoriteTotal', 'followingTotal'));
    }

}