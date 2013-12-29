@extends("layout.guest")
@section("content")
    <link rel="stylesheet" href="/css/login.css">
    {{ Form::open([
        "route" => "user/login",
        "autocomplete" => "off",
        "class" => "form-login",
        "role" => "form"
    ]) }}
        <h2>{{Lang::get('app.name')}}</h2>
        {{ Form::text("username", Input::get("username"), [
            "placeholder" => Lang::get('login.username'),
            "class" => "form-control"
        ]) }}
        {{ Form::password("password", [
            "placeholder" => Lang::get('login.password'),
            "class" => "form-control"
        ]) }}
        @if ($error = $errors->first("password"))
            <div class="error">
                {{ $error }}
            </div>
        @endif
        {{ Form::submit("Log in", [
            "class" => "btn btn-lg btn-primary btn-block"
        ]) }}
    {{ Form::close() }}
@stop