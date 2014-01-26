@extends("layout.auth")
@section("content")
<div class="row">
    <div class="col-md-3">
        <a href="/">{{Lang::get('app.name')}}</a>
        ›
        <a href="{{ action('NodesTopicsController@index', array($topic->node->id)) }}">
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
<div class="row text-muted small">
    <div class="col-md-12">
        <span>By</span>
        <strong>
            <a href="#">{{ $topic->user->username }}</a>
        </strong>
        <span>•</span>
        <span>5 小时 46 分钟前</span>
        <span>•</span>
        <span>323 次点击</span>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-12">
        {{ $topic->content }}
    </div>
</div>
<div class="row small">
    <div class="col-md-9">
        <a href="#">加入收藏</a>
        <a href="#">Tweet</a>
        <a href="#">Weibo</a>
        <a href="#">忽略主题</a>
        <a href="#">感谢</a>
    </div>
    <div class="col-md-3 text-right text-muted small">
        <span>343 次点击</span>
        <span>•</span>
        <span>1 人收藏</span>
    </div>
</div>

<!-- replies -->
<div class="row">
    <div class="col-md-12 small text-muted">
        <span>2 回复</span>
        <span|</span>
        <span>直到 2014-01-18 16:15:42</span>
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
                <div class="row small text-muted">
                    <div class="col-md-4">
                        <strong>
                            <a href="#">
                                {{ $reply->user->username }}
                            </a>
                        </strong>
                        <span>5 小时 51 分钟前</span>
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
<!-- replies create form -->
{{ Form::open(["url" => action("RepliesController@store"), "role" => "form"]) }}
{{ Form::errors() }}
@if (Session::has('infos'))
<div class="alert alert-success">
    <ul>
        @foreach (Session::get('infos')->all() as $info)
        <li>{{ $info }}</li>
        @endforeach
    </ul>
</div>
@endif

<h2>回复主题</h2>

{{ Form::textarea("content", Input::get("content"), ["placeholder" => 'Content', "class" => "form-control"]) }}
{{ Form::hidden("topic_id", $topic->id, []) }}

{{ Form::submit("提交", ["class" => "btn btn-lg btn-primary btn-block"]) }}
{{ Form::close() }}
@stop