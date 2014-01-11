@extends("layout.auth")
@section("content")
    {{ $topic->title }}
    {{ $topic->content }}
@stop