@extends("layout.auth")
@section("content")
    <ul class="list-group">
        @foreach ($topics as $topic)
            <li class="list-group-item">
                <span class="badge">14</span>
                {{ $topic->title }}
            </li>
        @endforeach
    </ul>
@stop