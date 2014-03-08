@extends("layout.auth")
@section("content")

@foreach ($members as $member)
    <div class="pull-left" style="margin: 0 10px;">
        <img src="http://cdn.v2ex.com/avatar/b954/66b8/27658_large.png?m=1382157118" alt="..." class="img-circle" style="width: 48px;height: 48px;">
        <div class="text-center"><a href="{{ action('MembersController@show', array($member->username)) }}">{{ $member->username }}</a></div>
    </div>
@endforeach

@stop