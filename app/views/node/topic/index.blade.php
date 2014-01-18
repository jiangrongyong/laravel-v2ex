@extends("layout.auth")
@section("content")
<ul class="list-group">
    @foreach ($topics as $topic)
    <li class="list-group-item">
        <span class="badge">14</span>

        <div>
            <a href="/member/mr7"><img src="http://cdn.v2ex.com/avatar/b954/66b8/27658_large.png?m=1382157118"
                                       class="avatar" border="0" align="default" style="width: 48px;height: 48px;"></a>
            <a href="{{ action('TopicsController@show', array($topic->id)) }}">{{ $topic->title }}</a>
        </div>
    </li>
    @endforeach
</ul>
@stop