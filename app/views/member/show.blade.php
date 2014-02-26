@extends("layout.auth")
@section("content")
<div class="row" style="margin-bottom: 10px;">
    <div class="col-md-1">
        <a href="{{ action('MembersController@show', array($member->username)) }}">
            <img src="{{ $member->getAvatar(73) }}"
                 style="width: 73px;height: 73px;"/>
        </a>
    </div>
    <div class="col-md-11" style="padding-left: 30px;">
        <div class="row">
            <div class="col-md-10">
                <h3 style="margin-top:14px;">{{ $member->username }}</h3>
            </div>
            <div class="col-md-2 text-right small">
                @if ($isFollowing)
                    <a href="{{ action('MembersController@postUnfollow', array($member->id)) }}">- 取消关注</a>
                @else
                    <a href="{{ action('MembersController@postFollow', array($member->id)) }}">+ 加入关注</a>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-muted small">
                <span class="glyphicon glyphicon-time"></span>
                第 {{ $member->id }} 号会员，加入于 {{ $member->created_at }}
            </div>
        </div>
    </div>
</div>
<div class="small text-muted">
    <ul class="list-unstyled" style="margin-left: 16px;">
        <li>
            <span class="glyphicon glyphicon-pushpin" style="margin-right:4px;"></span>
            {{ $member->setting->city }}
        </li>
        <li>
            <span class="glyphicon glyphicon-link" style="margin-right:4px;"></span>
            <a href="{{ $member->setting->website }}">{{ $member->setting->website }}</a>
        </li>
        <li>
            <span class="glyphicon glyphicon-hand-right" style="margin-right:4px;"></span>
            {{ $member->setting->bio }}
        </li>
    </ul>
</div>

<div class="row" style="margin-bottom: 4px;">
    <div class="col-md-2 text-muted small">最近创建的主题</div>
    <div class="col-md-2 col-md-offset-8 text-right">
        <a class="text-muted small" href="{{ action('MembersTopicsController@index', array($member->username)) }}">»更多主题</a>
    </div>
</div>

@include("topic.partials.list")

<div class="row" style="margin-bottom: 4px;">
    <div class="col-md-2 text-muted small">最近回复了</div>
    <div class="col-md-2 col-md-offset-8 text-right">
        <a class="text-muted small" href="{{ action('MembersRepliesController@index', array($member->username)) }}">»更多回复</a>
    </div>
</div>

@include("reply.partials.list")

@stop