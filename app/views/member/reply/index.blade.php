@extends("layout.auth")
@section("content")
<ul class="list-group">
    @foreach ($replies as $reply)
    <li class="list-group-item" style="padding: 8px 15px;">
        <div class="row">
            <div class="col-md-10">
                <a class="" href="">
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