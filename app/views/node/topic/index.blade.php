@extends("layout.auth")
@section("content")
<div class="row" style="margin-bottom: 10px;">
    <div class="col-md-1">
        <a href="/member/mr7">
            <img src="http://cdn.v2ex.com/navatar/8613/985e/90_large.png?m=1389769333"
                 style="width: 73px;height: 73px;"/>
        </a>
    </div>
    <div class="col-md-11" style="padding-left: 30px;">
        <div class="row">
            <div class="col-md-3">
                <a href="/" style="color: rgb(77, 82, 86);">{{Lang::get('app.name')}}</a>
                ›
                {{ $node->name}}
            </div>
            <div class="col-md-3 col-md-offset-6 small">
                <span style="color: rgb(226, 226, 226);">主题总数</span>
                <strong style="color: rgb(153, 153, 153);">1600</strong>
                <span style="color: #ccc;">•</span>
                <a href="#" style="color: rgb(119, 128, 135);">加入收藏</a>
            </div>
        </div>
        <div class="row small">
            <div class="col-md-12"
                 style="margin-top: 10px;margin-bottom: 10px;color: rgb(153, 153, 153);">
                这里讨论各种 Python 语言编程话题，也包括 Django，Tornado 等框架的讨论。这里是一个能够帮助你解决实际问题的地方。
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <button type="button" class="btn btn-default" style="font-size: 12px;">创建新主题</button>
            </div>
        </div>
    </div>
</div>
<ul class="list-group">
    @foreach ($topics as $topic)
    <li class="list-group-item" style="padding: 8px 15px;">
        <div class="row">
            <div class="col-md-1">
                <a href="/member/mr7">
                    <img src="http://cdn.v2ex.com/avatar/b954/66b8/27658_large.png?m=1382157118"
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
                    <div class="col-md-12">
                        <a href="{{ action('NodesTopicsController@index', array($topic->node->id)) }}"
                           class="badge">
                            {{ $node->name}}
                        </a>
                        <span style="color: #ccc;">•</span>
                        <strong>
                            <a style="color: rgb(119, 128, 135);" href="#" class="small">
                                {{ $topic->user->username}}
                            </a>
                        </strong>
                        <span style="color: #ccc;">•</span>
                        <span class="small" style="color: rgb(204, 204, 204);">2 分钟前</span>
                        <span style="color: #ccc;">•</span>
                        <span class="small" style="color: rgb(204, 204, 204);">最后回复来自</span>
                        <strong>
                            <a class="small" style="color: rgb(119, 128, 135);" href="#">
                                {{ $topic->user->username}}
                            </a>
                        </strong>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <a style="margin-top: 15px;" href="{{ action('TopicsController@show', array($topic->id)) }}"
                   class="badge">14</a>
            </div>
        </div>
    </li>
    @endforeach
</ul>
<div>
    <form>

    </form>
</div>
@stop