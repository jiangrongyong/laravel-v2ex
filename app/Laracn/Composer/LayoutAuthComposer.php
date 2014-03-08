<?php namespace Laracn\Composer;

use Auth;
use Laracn\Repo\Favorite\FavoriteInterface;
use Laracn\Repo\Follow\FollowInterface;
use Laracn\Repo\Node\NodeInterface;

class LayoutAuthComposer {

    protected $favorite;
    protected $follow;
    protected $node;

    public function __construct(FavoriteInterface $favorite, FollowInterface $follow, NodeInterface $node) {
        $this->favorite = $favorite;
        $this->follow = $follow;
        $this->node = $node;
    }

    public function compose($view) {
        $user = Auth::user();
        $favoriteTotal = $this->favorite->totalByUserId($user->id);
        $followingTotal = $this->follow->totalByUserId($user->id);
        $nodes = $this->node->all();

        $view->with(compact('user', 'favoriteTotal', 'followingTotal', 'nodes'));
    }

}