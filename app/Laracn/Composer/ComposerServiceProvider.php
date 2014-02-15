<?php namespace Laracn\Composer;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {

    public function register() {
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {
        \View::composer('layout.auth', 'Laracn\Composer\LayoutAuthComposer');
    }
}