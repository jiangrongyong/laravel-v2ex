<?php

use Illuminate\Support\MessageBag;

class UserController extends Controller {

    protected $user;

    public function __construct(User $user) {
        $this->user = $user;

        $this->beforeFilter('auth', array('only' => array('getProfile', 'getLogout')));
        $this->beforeFilter('guest', array('only' => array('getLogin', 'postLogin')));
    }

    public function getLogin() {
        return View::make('user/login');
    }

    public function postLogin() {
        $validator = Validator::make(Input::all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        $credentials = [
            'username' => Input::get('username'),
            'password' => Input::get('password')
        ];
        if (Auth::attempt($credentials, Input::get('remember', false))) {
            return Redirect::action('UserController@getProfile');
        }

        return Redirect::back()->withInput()->withErrors(new MessageBag([Lang::get('login.fail')]));
    }

    public function getProfile() {
        return View::make('user/profile');
    }

    public function getLogout() {
        Auth::logout();
        return Redirect::action('UserController@getLogin');
    }

    public function getSignup() {
        return View::make('user/signup');
    }

    public function postSignup() {
        $validator = Validator::make(Input::all(), [
            'username' => 'required|unique:users',
            'password' => 'required',
            'email' => 'required|email|unique:users'
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        try {
            $user = $this->user->create(Input::all());
        } catch (\Illuminate\Database\QueryException $e) {
            return Redirect::back()->withInput()->withErrors(new MessageBag([Lang::get('signup.fail')]));
        }

        Auth::login($user);
        return Redirect::action('UserController@getProfile');
    }
}