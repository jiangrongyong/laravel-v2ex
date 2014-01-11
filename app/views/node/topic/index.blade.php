@extends("layout.auth")
@section("content")
    <ul class="list-group">
        @foreach ($topics as $topic)
            <li class="list-group-item">
                <span class="badge">14</span>
                <a href="{{ action('TopicsController@show', array($topic->id)) }}">{{ $topic->title }}</a>
            </li>
        @endforeach
    </ul>
@stop