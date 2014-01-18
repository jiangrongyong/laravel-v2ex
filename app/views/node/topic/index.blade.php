@extends("layout.auth")
@section("content")
<ul class="list-group">
    @foreach ($topics as $topic)
    <li class="list-group-item">
        <div class="row">
            <div class="col-md-1">
                <a href="/member/mr7">
                    <img src="http://cdn.v2ex.com/avatar/b954/66b8/27658_large.png?m=1382157118"
                         style="width: 48px;height: 48px;"/>
                </a>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ action('TopicsController@show', array($topic->id)) }}">
                            <h5>{{ $topic->title }}</h5>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <a href="#" class="badge">奇思妙想</a>
                    </div>
                    <div class="col-md-3">
                        <a href="#">jiangrongyong</a>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <a href="{{ action('TopicsController@show', array($topic->id)) }}" class="badge">14</a>
            </div>
        </div>
    </li>
    @endforeach
</ul>
@stop