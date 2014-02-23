@extends("layout.auth")
@section("content")
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb list-unstyled" style="padding:0;margin:0;background-color:white;">
            <li><a href="/">{{Lang::get('app.name')}}</a></li>
            <li>
                <a href="{{ action('NodesTopicsController@index', array($topic->node->id)) }}">
                    {{$topic->node->name }}
                </a>
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-10">
        <h2>{{ $topic->title }}</h2>
    </div>
    <div class="col-md-2">
        <a href="{{ action('MembersController@show', array($topic->user->username)) }}">
            <img src="{{ $topic->user->getAvatar(73) }}"
                 style="width: 73px;height: 73px;"/>
        </a>
    </div>
</div>
<div class="row text-muted small">
    <div class="col-md-12">
        <span>By</span>
        <strong>
            <a href="{{ action('MembersController@show', array($topic->user->username)) }}">{{ $topic->user->username }}</a>
        </strong>
        <span>•</span>
        <span>{{ $topic->getCreatedAtDiffForHumans() }}</span>
        <span>•</span>
        <a href="#">加入收藏</a>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-12">
        {{ $topic->content }}
    </div>
</div>

<!-- replies -->
<hr/>
<ul class="list-group">
    @foreach ($replies as $index => $reply)
    <li id="reply{{ $index + 1 }}" class="list-group-item" style="padding: 8px 15px;">
        <div class="row">
            <div class="col-md-1">
                <a href="{{ action('MembersController@show', array($reply->user->username)) }}">
                    <img src="{{ $reply->user->getAvatar(48) }}"
                         style="width: 48px;height: 48px;"/>
                </a>
            </div>
            <div class="col-md-11">
                <div class="row small text-muted">
                    <div class="col-md-4">
                        <strong>
                            <a href="{{ action('MembersController@show', array($reply->user->username)) }}">
                                {{ $reply->user->username }}
                            </a>
                        </strong>
                        <span>{{ $reply->getCreatedAtDiffForHumans() }}</span>
                    </div>
                    <div class="col-md-2 col-md-offset-6 text-right">
                        <a href="#">回复</a>
                        <a href="#reply{{ $index + 1 }}" class="badge">#{{ $index + 1 }}</a>
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

{{ Form::hidden("topic_id", $topic->id, []) }}

<div class="row">
    <div class="col-md-10">
        {{ Form::textarea("content", Input::get("content"), ["placeholder" => '回复', "class" => "form-control", "rows" => 5]) }}
    </div>
    <div class="col-md-2">
        {{ Form::submit("提交", ["class" => "btn btn-lg btn-primary btn-block"]) }}
    </div>
</div>

{{ Form::close() }}
@stop