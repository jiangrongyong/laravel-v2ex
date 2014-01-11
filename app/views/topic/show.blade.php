@extends("layout.auth")
@section("content")
    <h2>{{ $topic->title }}</h2>
    <hr />
    {{ $topic->content }}

    <h3>Replies</h3>
    <ul class="list-group">
        @foreach ($replies as $reply)
            <li class="list-group-item">
                {{ $reply->content }}
            </li>
        @endforeach
    </ul>
@stop