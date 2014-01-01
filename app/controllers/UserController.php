<?php

use Illuminate\Support\MessageBag;

class UserController extends Controller {

    public function __construct() {
        $this->beforeFilter('auth', array('only' => array('getProfile', 'getLogout')));
        $this->beforeFilter('guest', array('only' => array('getLogin', 'postLogin')));
    }

    public function getLogin() {
        $errors = new MessageBag();

        if ($old = Input::old('errors')) {
            $errors = $old;
        }

        $data = [
            'errors' => $errors
        ];

        return View::make('user/login', $data);
    }

    public function postLogin() {
        $validator = Validator::make(Input::all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($validator->passes()) {
            $credentials = [
                'username' => Input::get('username'),
                'password' => Input::get('password')
            ];

            if (Auth::attempt($credentials)) {
                return Redirect::action('UserController@getProfile');
            }
        }

        $data['errors'] = new MessageBag([
            'password' => [
                Lang::get('login.fail')
            ]
        ]);

        $data['username'] = Input::get('username');

        return Redirect::action('UserController@getLogin')
            ->withInput($data);
    }

    public function getProfile() {
        return View::make('user/profile');
    }

    public function getLogout() {
        Auth::logout();
        return Redirect::action('UserController@getLogin');
    }
}