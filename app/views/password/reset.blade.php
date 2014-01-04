@extends("layout.guest")
@section("content")
    <link rel="stylesheet" href="/css/reset.css">
    {{ Form::open([
        "url" => action('RemindersController@postReset'),
        "autocomplete" => "off",
        "class" => "form-reset",
        "role" => "form"
    ]) }}
        @if ($errors->any())
            <div class="alert alert-warning">
                <ul>
                    {{ implode('', $errors->all('<li>:message</li>')) }}
                </ul>
            </div>
        @endif
        <h2>{{Lang::get('app.name')}}</h2>
        {{ Form::text("email", Input::get("email"), [
            "placeholder" => "john@example.com",
            "class" => "form-control",
            "value" => Input::get('email')
        ]) }}
        {{ Form::password("password", [
            "placeholder" => "Password",
            "class" => "form-control password"
        ]) }}
        {{ Form::password("password_confirmation", [
            "placeholder" => "Repeat Password",
            "class" => "form-control password_confirmation"
        ]) }}
        <input type="hidden" name="token" value="{{ $token }}">
        {{ Form::submit("Reset", [
            "class" => "btn btn-lg btn-primary btn-block"
        ]) }}
    {{ Form::close() }}
@stop
