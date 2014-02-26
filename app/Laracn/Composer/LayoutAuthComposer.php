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
        $view->with('user', Auth::user());
        $view->with('favoriteTotal', $this->favorite->total(Auth::user()->id));
        $view->with('followingTotal', $this->follow->followingTotal(Auth::user()->id));
    }

}