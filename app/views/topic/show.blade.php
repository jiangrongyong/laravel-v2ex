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
        <small style="color: #999;">
            <span>By</span>
            <strong>
                <a href="#" style="color: rgb(119, 128, 135);">{{ $topic->user->username }}</a>
            </strong>
            <span style="color: #ccc;">•</span>
            <span>5 小时 46 分钟前</span>
            <span style="color: #ccc;">•</span>
            <span>323 次点击</span>
        </small>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-12">
        {{ $topic->content }}
    </div>
</div>
<div class="row">
    <div class="col-md-10">
        <small>
            <a href="#">加入收藏</a>
            <a href="#">Tweet</a>
            <a href="#">Weibo</a>
            <a href="#">忽略主题</a>
            <a href="#">感谢</a>
        </small>
    </div>
    <div class="col-md-2">
        <small>
            <span>343 次点击</span>
            <span style="color: #ccc;">•</span>
            <span>1 人收藏</span>
        </small>
    </div>
</div>

<!-- replies -->
<div class="row">
    <div class="col-md-12">
        <small>
            <span>2 回复</span>
            <span|</span>
            <span>直到 2014-01-18 16:15:42</span>
        </small>
    </div>
</div>
<hr/>
<ul class="list-group">
    @foreach ($replies as $reply)
    <li class="list-group-item">
        <div class="row">
            <div class="col-md-1">
                <a href="/member/mr7">
                    <img src="http://cdn.v2ex.com/avatar/b954/66b8/27658_large.png?m=1382157118"
                         style="width: 48px;height: 48px;"/>
                </a>
            </div>
            <div class="col-md-11">
                <div class="row">
                    <div class="col-md-4">
                        <small>
                            <strong>
                                <a style="color: rgb(119, 128, 135);" href="#">
                                    {{ $reply->user->username }}
                                </a>
                            </strong>
                            <span style="color: rgb(204, 204, 204);">5 小时 51 分钟前</span>
                        </small>
                    </div>
                    <div class="col-md-1 col-md-offset-6">
                        <small>
                            <a href="#">回复</a>
                        </small>
                    </div>
                    <div class="col-md-1">
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

<!--
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
-->
@stop