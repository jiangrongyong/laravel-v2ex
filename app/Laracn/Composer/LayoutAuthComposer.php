<?php namespace Laracn\Composer;

use Auth;

class LayoutAuthComposer {

    public function compose($view) {
        $view->with('user', Auth::user());
    }

}