@extends("layout.auth")
@section("content")
<div class="row">
    <div class="col-md-3">
        <a href="/" style="color: rgb(77, 82, 86);">{{Lang::get('app.name')}}</a>
        ›
        <a href="{{ action('NodesTopicsController@index', array($topic->node->id)) }}" style="color: rgb(77, 82, 86);">
            {{$topic->node->name }}
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-10">
        <h2>{{ $topic->title }}</h2>
    </div>
    <div class="col-md-2">
        <a href="/member/mr7">
            <img src="http://cdn.v2ex.com/avatar/b954/66b8/27658_large.png?m=1382157118"
                 style="width: 73px;height: 73px;"/>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <span class="small" style="color: #999;">By</span>
        <strong>
            <a class="small" href="#" style="color: rgb(119, 128, 135);">{{ $topic->user->username }}</a>
        </strong>
        <span style="color: #ccc;">•</span>
        <span class="small" style="color: #999;">5 小时 46 分钟前</span>
        <span style="color: #ccc;">•</span>
        <span class="small" style="color: #999;">323 次点击</span>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-12">
        {{ $topic->content }}
    </div>
</div>
<div class="row">
    <div class="col-md-9">
        <a class="small" href="#">加入收藏</a>
        <a class="small" href="#">Tweet</a>
        <a class="small" href="#">Weibo</a>
        <a class="small" href="#">忽略主题</a>
        <a class="small" href="#">感谢</a>
    </div>
    <div class="col-md-3 text-right">
        <span class="small">343 次点击</span>
        <span style="color: #ccc;">•</span>
        <span class="small">1 人收藏</span>
    </div>
</div>

<!-- replies -->
<div class="row">
    <div class="col-md-12">
        <span class="small">2 回复</span>
        <span|</span>
        <span class="small">直到 2014-01-18 16:15:42</span>
    </div>
</div>
<hr/>
<ul class="list-group">
    @foreach ($replies as $reply)
    <li class="list-group-item" style="padding: 8px 15px;">
        <div class="row">
            <div class="col-md-1">
                <a href="/member/mr7">
                    <img src="http://cdn.v2ex.com/avatar/b954/66b8/27658_large.png?m=1382157118"
                         style="width: 48px;height: 48px;"/>
                </a>
            </div>
            <div class="col-md-11">
                <div class="row small">
                    <div class="col-md-4">
                        <strong>
                            <a style="color: rgb(119, 128, 135);" href="#">
                                {{ $reply->user->username }}
                            </a>
                        </strong>
                        <span style="color: rgb(204, 204, 204);">5 小时 51 分钟前</span>
                    </div>
                    <div class="col-md-2 col-md-offset-6 text-right">
                        <a href="#">回复</a>
                        <a href="#" class="badge">1</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {{ $reply->content }}
                    </div>
                </div>
            </div>
        </div>
    </li>
    @endforeach
</ul>
@stop