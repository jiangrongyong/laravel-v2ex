@extends("layout.auth")
@section("content")
<div class="row" style="margin-bottom: 10px;">
    <div class="col-md-1">
        <a href="/member/mr7">
            <img src="https://pbs.twimg.com/profile_images/3631880837/74c5dd82a8b5540ab7dd4ce30fc0a2f6_bigger.png"
                 style="width: 73px;height: 73px;border-radius: 4px;"/>
        </a>
    </div>
    <div class="col-md-11" style="padding-left: 30px;">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb list-unstyled" style="padding:0;margin:0;background-color:white;">
                    <li><a href="/">{{Lang::get('app.name')}}</a></li>
                    <li class="active">{{ $node->name}}</li>
                </ol>
            </div>
        </div>
        <div class="row small">
            <div class="col-md-12"
                 style="margin-top: 10px;margin-bottom: 10px;color: rgb(153, 153, 153);">
                 {{ $node->header }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <a href="{{ action('NodesTopicsController@create', [$node->id]) }}" class="btn btn-default" style="font-size: 12px;">创建新主题</a>
            </div>
        </div>
    </div>
</div>
<ul class="list-group">
    @foreach ($topics as $topic)
    <li class="list-group-item" style="padding: 8px 15px;">
        <div class="row">
            <div class="col-md-1">
                <a href="{{ action('MembersController@show', array($topic->user->username)) }}">
                    <img src="{{ $topic->user->getAvatar(48) }}"
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
                    <div class="col-md-12 text-muted small">
                        <a href="{{ action('NodesTopicsController@index', array($topic->node->id)) }}"
                           class="badge">
                            {{ $node->name}}
                        </a>
                        <span>•</span>
                        <strong>
                            <a href="{{ action('MembersController@show', array($topic->user->username)) }}">
                                {{ $topic->user->username }}
                            </a>
                        </strong>
                        <span>•</span>
                        <span>{{ $topic->getUpdateAtDiffForHumans() }}</span>
                        @if (!is_null($topic->replyEndUser))
                        <span>•</span>
                        <span>最后回复来自</span>
                        <strong>
                            <a href="{{ action('MembersController@show', array($topic->replyEndUser->username)) }}">
                                {{ $topic->replyEndUser->username }}
                            </a>
                        </strong>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <a style="margin-top: 15px;" href="{{ action('TopicsController@show', array($topic->id)) }}"
                   class="badge">{{ $topic->replies_total }}</a>
            </div>
        </div>
    </li>
    @endforeach
</ul>
<?php echo $topics->links(); ?>
@stop