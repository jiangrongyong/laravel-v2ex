@extends("layout.auth")
@section("content")
<div class="row" style="margin-bottom: 10px;">
    <div class="col-md-1">
        <a href="{{ action('MembersController@show', array($user->username)) }}">
            <img src="{{ Gravatar::src($user->email, 73) }}"
                 style="width: 73px;height: 73px;"/>
        </a>
    </div>
    <div class="col-md-11" style="padding-left: 30px;">
        <div class="row">
            <div class="col-md-12">
                <h3 style="margin-top:14px;">{{ $user->username }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-muted small">
                第 {{ $user->id }} 号会员，加入于 {{ $user->created_at }}
            </div>
        </div>
    </div>
</div>

<div class="row" style="margin-bottom: 4px;">
    <div class="col-md-2 text-muted small">最近创建的主题</div>
    <div class="col-md-2 col-md-offset-8 text-right">
        <a class="text-muted small" href="{{ action('MembersTopicsController@index', array($user->username)) }}">»更多主题</a>
    </div>
</div>
<ul class="list-group">
    @foreach ($topics as $topic)
    <li class="list-group-item" style="padding: 8px 15px;">
        <div class="row">
            <div class="col-md-11">
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
                    <div class="col-md-12 text-muted small">
                        <a href="{{ action('NodesTopicsController@index', array($topic->node->id)) }}"
                           class="badge">
                           {{ $topic->node->name }}
                        </a>
                        <span>•</span>
                        <strong>
                            <a href="{{ action('MembersController@show', array($topic->user->username)) }}">
                                {{ $topic->user->username }}
                            </a>
                        </strong>
                        <span>•</span>
                        <span>{{ $topic->getUpdateAtDiffForHumans() }}</span>
                        @if (!is_null($topic->replyEnd))
                        <span>•</span>
                        <span>最后回复来自</span>
                        <strong>
                            <a href="{{ action('MembersController@show', array($topic->replyEnd->user->username)) }}">
                                {{ $topic->replyEnd->user->username }}
                            </a>
                        </strong>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <a style="margin-top: 15px;" href="{{ action('TopicsController@show', array($topic->id)) }}"
                   class="badge">{{ $topic->repliesTotal }}</a>
            </div>
        </div>
    </li>
    @endforeach
</ul>

<div class="row" style="margin-bottom: 4px;">
    <div class="col-md-2 text-muted small">最近回复了</div>
    <div class="col-md-2 col-md-offset-8 text-right">
        <a class="text-muted small" href="{{ action('MembersRepliesController@index', array($user->username)) }}">»更多回复</a>
    </div>
</div>
<ul class="list-group">
    @foreach ($replies as $reply)
    <li class="list-group-item" style="padding: 8px 15px;">
        <div class="row">
            <div class="col-md-10">
                <a class="" href="{{ action('TopicsController@show', array($reply->topic->id)) }}">
                    <blockquote>
                        {{ $reply->topic->title }}
                    </blockquote>
                </a>
            </div>
            <div class="col-md-2 text-muted small text-right">
                {{ $reply->getCreatedAtDiffForHumans() }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {{ $reply->content }}
            </div>
        </div>
    </li>
    @endforeach
</ul>
@stop