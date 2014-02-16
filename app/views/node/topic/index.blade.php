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

@include("topic.partials.list")
<?php echo $topics->links(); ?>

@stop