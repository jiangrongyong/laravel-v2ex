@extends("layout.auth")
@section("content")
<ol class="breadcrumb list-unstyled" style="padding:0;background-color:white;">
    <li><a href="/">{{Lang::get('app.name')}}</a></li>
    <li>
        <a href="{{ action('MembersController@show', array($member->username)) }}">{{ $member->username }}</a>
    </li>
    <li class="actived">全部回复</li>
</ol>
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
<?php echo $replies->links(); ?>
@stop