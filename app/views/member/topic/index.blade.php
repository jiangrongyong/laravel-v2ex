@extends("layout.auth")
@section("content")
<ol class="breadcrumb list-unstyled" style="padding:0;background-color:white;">
    <li><a href="/">{{Lang::get('app.name')}}</a></li>
    <li>
        <a href="{{ action('MembersController@show', array($member->username)) }}">{{ $member->username }}</a>
    </li>
    <li class="actived">全部主题</li>
</ol>
<ul class="list-group">
    @foreach ($topics as $topic)
    <li class="list-group-item" style="padding: 8px 15px;">
        <div class="row">
            <div class="col-md-11">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ action('TopicsController@show', array($topic->id)) }}">
                            <h5 style="margin-top: 5px;margin-bottom: 5px;color: rgb(119, 128, 135);font-size: 16px;font-weight: normal;">
                                {{ $topic->title }}
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