<?php namespace Laracn\Exception;

use Laracn\Service\Notification\NotifierInterface;

class NotifyHandler implements HandlerInterface {

    public function __construct() {
    }

    /**
     * Handle Laracn Exceptions
     *
     * @param \Laracn\Exception\LaracnException
     * @return void
     */
    public function handle(LaracnException $e) {
        // handle exception
    }

}
