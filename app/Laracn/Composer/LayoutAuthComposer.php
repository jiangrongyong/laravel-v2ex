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
        $view->with('favoriteNodeTotal', $this->favorite->nodeTotal(Auth::user()->id));
        $view->with('favoriteTopicTotal', $this->favorite->topicTotal(Auth::user()->id));
        $view->with('favoriteUserTotal', $this->favorite->userTotal(Auth::user()->id));
    }

}