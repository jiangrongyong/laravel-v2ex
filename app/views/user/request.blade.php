@extends("layout.guest")
@section("content")
    <link rel="stylesheet" href="/css/request.css">
    @if ($requested)
        Check your mail!
    @else
        {{ Form::open([
            "route" => "user/request",
            "autocomplete" => "off",
            "class" => "form-request",
            "role" => "form"
        ]) }}
            <h2>{{Lang::get('app.name')}}</h2>
            {{ Form::text("email", Input::get("email"), [
                "placeholder" => "john@example.com",
                "class" => "form-control"
            ]) }}
            {{ Form::submit("Reset", [
                "class" => "btn btn-lg btn-primary btn-block"
            ]) }}
        {{ Form::close() }}
    @endif
@stop
