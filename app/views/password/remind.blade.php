@extends("layout.guest")
@section("content")
    <link rel="stylesheet" href="/css/remind.css">
    <form action="{{ action('RemindersController@postRemind') }}" class="form-request" role="form" method="POST">
        @if (Session::get('errors'))
            <div class="alert alert-warning">
                <ul>
                    @foreach (Session::get('errors')->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <input type="email" name="email" class="form-control" placeholder="john@example.com" required autofocus>
        <input type="submit" value="Send Reminder" class="btn btn-lg btn-primary btn-block">
    </form>
@stop