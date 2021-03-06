<?php
use Illuminate\Support\MessageBag;

class RemindersController extends Controller {

    /**
     * Display the password reminder view.
     *
     * @return Response
     */
    public function getRemind() {
        return View::make('password.remind');
    }

    /**
     * Handle a POST request to remind a user of their password.
     *
     * @return Response
     */
    public function postRemind() {
        switch ($response = Password::remind(Input::only('email'), function ($message, $user) {
            $message->subject('Password Reset');
        })) {
            case Password::INVALID_USER:
                return Redirect::back()->withErrors(new MessageBag([Lang::get($response)]));

            case Password::REMINDER_SENT:
                return Redirect::back()->with('infos', new MessageBag([Lang::get($response)]));
        }
    }

    /**
     * Display the password reset view for the given token.
     *
     * @param  string $token
     * @return Response
     */
    public function getReset($token = null) {
        if (is_null($token)) App::abort(404);

        return View::make('password.reset')->with('token', $token);
    }

    /**
     * Handle a POST request to reset a user's password.
     *
     * @return Response
     */
    public function postReset() {
        $credentials = Input::only(
            'email', 'password', 'password_confirmation', 'token'
        );

        $response = Password::reset($credentials, function ($user, $password) {
            $user->password = Hash::make($password);

            $user->save();
        });

        switch ($response) {
            case Password::INVALID_PASSWORD:
            case Password::INVALID_TOKEN:
            case Password::INVALID_USER:
                return Redirect::back()->withInput()->withErrors(Lang::get($response));

            case Password::PASSWORD_RESET:
                return Redirect::action('UserController@getLogin')->with('infos', new MessageBag(['密码修改成功']));;
        }
    }

}