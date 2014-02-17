@extends("layout.guest")
@section("content")
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    {{ Form::open(["action" => "UserController@postSignup", "autocomplete" => "off", "class" => "form-signup", "role" => "form"]) }}
        {{ Form::errors() }}
        {{ Form::infos() }}
        <h2>{{Lang::get('app.name')}}</h2>
        {{ Form::text("username", Input::get("username"), ["placeholder" => Lang::get('signup.username'), "class" => "form-control", "autofocus" => "true"]) }}
        {{ Form::password("password", ["placeholder" => Lang::get('signup.password'), "class" => "form-control"]) }}
        {{ Form::email("email", Input::get("email"), ["placeholder" => Lang::get('signup.email'), "class" => "form-control"]) }}
        {{ Form::submit(Lang::get('signup.submit'), ["class" => "btn btn-lg btn-primary btn-block"]) }}
    {{ Form::close() }}
@stop