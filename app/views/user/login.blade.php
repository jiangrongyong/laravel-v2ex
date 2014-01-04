@extends("layout.guest")
@section("content")
    <link rel="stylesheet" href="/css/login.css">
    {{ Form::open(["action" => "UserController@postLogin", "autocomplete" => "off", "class" => "form-login", "role" => "form"]) }}
        @if ($errors->any())
            <div class="alert alert-warning">
                <ul>
                    {{ implode('', $errors->all('<li>:message</li>')) }}
                </ul>
            </div>
        @endif
        @if (Session::has('infos'))
            <div class="alert alert-success">
                <ul>
                    @foreach (Session::get('infos')->all() as $info)
                        <li>{{ $info }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h2>{{Lang::get('app.name')}}</h2>
        {{ Form::text("username", Input::get("username"), ["placeholder" => Lang::get('login.username'), "class" => "form-control", "autofocus" => "true"]) }}
        {{ Form::password("password", ["placeholder" => Lang::get('login.password'), "class" => "form-control"]) }}
        <label class="checkbox">
            <input type="checkbox" name="remember" value="true" />
            Remember me
        </label>
        {{ Form::submit("Log in", ["class" => "btn btn-lg btn-primary btn-block"]) }}
        <a id="signup_link" href="{{ action('UserController@getSignup') }}">Sign up</a>
        <a id="forgot_link" href="{{ action('RemindersController@getRemind') }}">Forgot password</a>
    {{ Form::close() }}
@stop