@extends("layout.guest")
@section("content")
    <link rel="stylesheet" href="/css/login.css">
    {{ Form::open(["action" => "UserController@postLogin", "autocomplete" => "off", "class" => "form-login", "role" => "form"]) }}
        @if ($error = $errors->first("password"))
            <div class="alert alert-warning">
                {{ $error }}
            </div>
        @endif
        <h2>{{Lang::get('app.name')}}</h2>
        {{ Form::text("username", Input::get("username"), ["placeholder" => Lang::get('login.username'), "class" => "form-control", "required" => "true", "autofocus" => "true"]) }}
        {{ Form::password("password", ["placeholder" => Lang::get('login.password'), "class" => "form-control", "required" => "true"]) }}
        <label class="checkbox">
            <input type="checkbox" name="remember" value="true" />
            Remember me
        </label>
        {{ Form::submit("Log in", ["class" => "btn btn-lg btn-primary btn-block"]) }}
        <a href="{{ action('RemindersController@getRemind') }}">Forgot password</a>
    {{ Form::close() }}
@stop