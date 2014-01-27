<?php namespace Laracn\Exception;

use Illuminate\Support\ServiceProvider;

class ExceptionServiceProvider extends ServiceProvider {

    public function register() {
        $app = $this->app;

        $app['laracn.exception'] = $app->share(function ($app) {
            return new NotifyHandler();
        });
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {
        $app = $this->app;

        $app->error(function (LaracnException $e) use ($app) {
            $app['laracn.exception']->handle($e);
        });
    }
}