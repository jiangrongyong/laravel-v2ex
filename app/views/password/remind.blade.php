@extends("layout.guest")
@section("content")
    <link rel="stylesheet" href="{{ asset('css/remind.css') }}">
    <form action="{{ action('RemindersController@postRemind') }}" class="form-remind" role="form" method="POST">
        {{ Form::errors() }}
        {{ Form::infos() }}
        <input type="email" name="email" class="form-control" placeholder="john@example.com" required autofocus>
        <input type="submit" value="Send Reminder" class="btn btn-lg btn-primary btn-block">
    </form>
@stop