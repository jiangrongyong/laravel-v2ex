<?php namespace Laracn\Exception;

interface HandlerInterface {

    /**
     * Handle Laracn Exceptions
     *
     * @param \Laracn\Exception\LaracnException
     * @return void
     */
    public function handle(LaracnException $e);

}