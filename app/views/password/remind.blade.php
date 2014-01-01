@extends("layout.guest")
@section("content")
    <link rel="stylesheet" href="/css/request.css">
    <form action="{{ action('RemindersController@postRemind') }}" class="form-request" role="form" method="POST">
        @if ($error = $errors->first("msg"))
            <div class="alert alert-warning">
                {{ $error }}
            </div>
        @endif
        <input type="text" name="email" class="form-control" placeholder="john@example.com">
        <input type="submit" value="Send Reminder" class="btn btn-lg btn-primary btn-block">
    </form>
@stop