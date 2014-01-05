<?php

Form::macro('errors', function () {

    $errors = Session::get('errors', new Illuminate\Support\MessageBag());

    if (!$errors->any()) {
        return null;
    }
    return sprintf(
        '<div class="alert alert-warning">
            <ul>
                %s
            </ul>
        </div>',
        implode('', $errors->all('<li>:message</li>'))
    );
});