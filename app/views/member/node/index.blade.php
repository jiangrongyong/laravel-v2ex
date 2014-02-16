@extends("layout.auth")
@section("content")
<ol class="breadcrumb list-unstyled" style="padding:0;background-color:white;">
    <li><a href="/">{{Lang::get('app.name')}}</a></li>
    <li>
        <a href="{{ action('MembersController@show', array($member->username)) }}">{{ $member->username }}</a>
    </li>
    <li class="actived">节点收藏</li>
</ol>
<ul class="list-group">
    @foreach ($nodes as $node)
    <li class="list-group-item" style="padding: 8px 15px;">
        <div class="row">
            <div class="col-md-1">
                <img src="https://pbs.twimg.com/profile_images/3631880837/74c5dd82a8b5540ab7dd4ce30fc0a2f6_bigger.png"
                     style="width: 48px;height: 48px;"/>
            </div>
            <div class="col-md-11">
                <div class="row">
                    <div class="col-md-12">
                        <h5 style="margin-top: 5px;margin-bottom: 5px;color: rgb(119, 128, 135);font-size: 16px;font-weight: normal;">
                            {{ $node->name }}
                        </h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-muted small">
                        <span>topics: 100</span>
                    </div>
                </div>
            </div>
        </div>
    </li>
    @endforeach
</ul>
@stop