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
        $view->with('favoriteNodeTotal', $this->favorite->nodeTotal(Auth::user()->id));
        $view->with('favoriteTopicTotal', $this->favorite->topicTotal(Auth::user()->id));
        $view->with('followingTotal', $this->follow->followingsTotal(Auth::user()->id));
    }

}