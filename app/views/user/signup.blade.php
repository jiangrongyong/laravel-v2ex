@extends("layout.guest")
@section("content")
    <link rel="stylesheet" href="/css/signup.css">
    {{ Form::open(["action" => "UserController@postSignup", "autocomplete" => "off", "class" => "form-signup", "role" => "form"]) }}
        @if (Session::has('errors'))
            <div class="alert alert-warning">
                <ul>
                    @foreach (Session::get('errors')->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
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
        {{ Form::text("username", Input::get("username"), ["placeholder" => Lang::get('signup.username'), "class" => "form-control", "autofocus" => "true"]) }}
        {{ Form::password("password", ["placeholder" => Lang::get('signup.password'), "class" => "form-control"]) }}
        {{ Form::email("email", Input::get("email"), ["placeholder" => Lang::get('signup.email'), "class" => "form-control"]) }}
        {{ Form::submit(Lang::get('signup.submit'), ["class" => "btn btn-lg btn-primary btn-block"]) }}
    {{ Form::close() }}
@stop