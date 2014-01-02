@extends("layout.guest")
@section("content")
    <link rel="stylesheet" href="/css/login.css">
    {{ Form::open(["action" => "UserController@postLogin", "autocomplete" => "off", "class" => "form-login", "role" => "form"]) }}
        @if (Session::get('errors'))
            <div class="alert alert-warning">
                <ul>
                    @foreach (Session::get('errors')->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (Session::get('infos'))
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
        <a href="{{ action('RemindersController@getRemind') }}">Forgot password</a>
    {{ Form::close() }}
@stop