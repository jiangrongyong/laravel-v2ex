@extends("layout.guest")
@section("content")
    <link rel="stylesheet" href="/css/remind.css">
    <form action="{{ action('RemindersController@postRemind') }}" class="form-remind" role="form" method="POST">
        {{ Form::errors() }}
        @if (Session::has('infos'))
            <div class="alert alert-success">
                <ul>
                    @foreach (Session::get('infos')->all() as $info)
                        <li>{{ $info }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <input type="email" name="email" class="form-control" placeholder="john@example.com" required autofocus>
        <input type="submit" value="Send Reminder" class="btn btn-lg btn-primary btn-block">
    </form>
@stop