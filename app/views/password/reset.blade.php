@extends("layout.guest")
@section("content")
    <link rel="stylesheet" href="/css/reset.css">
    {{ Form::open([
        "url" => action('RemindersController@postReset'),
        "autocomplete" => "off",
        "class" => "form-reset",
        "role" => "form"
    ]) }}
        <h2>{{Lang::get('app.name')}}</h2>
        @if ($error = $errors->first("token"))
            <div class="error">
                {{ $error }}
            </div>
        @endif
        {{ Form::text("email", Input::get("email"), [
            "placeholder" => "john@example.com",
            "class" => "form-control"
        ]) }}
        @if ($error = $errors->first("email"))
            <div class="error">
                {{ $error }}
            </div>
        @endif
        {{ Form::password("password", [
            "placeholder" => "Password",
            "class" => "form-control password"
        ]) }}
        @if ($error = $errors->first("password"))
            <div class="error">
                {{ $error }}
            </div>
        @endif
        {{ Form::password("password_confirmation", [
            "placeholder" => "Repeat Password",
            "class" => "form-control password_confirmation"
        ]) }}
        @if ($error = $errors->first("password_confirmation"))
            <div class="error">
                {{ $error }}
            </div>
        @endif
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="error">
            {{ Session::get('error') }}
        </div>
        {{ Form::submit("Reset", [
            "class" => "btn btn-lg btn-primary btn-block"
        ]) }}
    {{ Form::close() }}
@stop
