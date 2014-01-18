@extends("layout.auth")
@section("content")
<ul class="list-group">
    @foreach ($topics as $topic)
    <li class="list-group-item" style="padding: 8px 15px;">
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
                            <h5 style="margin-top: 5px;margin-bottom: 5px;color: rgb(119, 128, 135);font-size: 16px;font-weight: normal;">
                                {{ $topic->title}}
                            </h5>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="badge">{{ $node->name }}</a>
                        <span style="color: #ccc;">•</span>
                        <a style="color: rgb(119, 128, 135);font-weight: bold;font-size: 12px;" href="#">
                            {{ $topic->user->username}}
                        </a>
                        <span style="color: #ccc;">•</span>
                        <span style="color: rgb(204, 204, 204);font-size: 12px;">2 分钟前</span>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <a style="margin-top: 15px;" href="{{ action('TopicsController@show', array($topic->id)) }}"
                   class="badge">14</a>
            </div>
        </div>
    </li>
    @endforeach
</ul>
@stop