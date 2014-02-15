<?php namespace Laracn\Composer;

use Auth;
use Laracn\Repo\Favorite\FavoriteInterface;

class LayoutAuthComposer {

    protected $favorite;

    public function __construct(FavoriteInterface $favorite) {
        $this->favorite = $favorite;
    }

    public function compose($view) {
        $view->with('user', Auth::user());
        $view->with('favoriteNodeCounts', $this->favorite->nodeCounts(Auth::user()->id));
        $view->with('favoriteTopicCounts', $this->favorite->topicCounts(Auth::user()->id));
        $view->with('favoriteUserCounts', $this->favorite->userCounts(Auth::user()->id));
    }

}