@extends("layout.auth")
@section("content")
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
<?php echo $topicsPaginator->links(); ?>
@stop