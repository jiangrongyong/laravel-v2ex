@section("sidebar")
<div class="row">
    <div class="col-md-3">
        <a href="/member/mr7">
            <img src="{{ $user->getAvatar(48) }}"
                 style="width: 48px;height: 48px;"/>
        </a>
    </div>
    <div class="col-md-9" style="padding-top: 10px;">
        <a href="{{ action('MembersController@show', array($user->username)) }}">{{ $user->username }}</a>
    </div>
</div>
<div class="row text-muted small" style="margin-top: 8px;">
    <a href="#" class="col-md-4 text-center" style="display: block;">
        <div>{{ $favoriteNodeCounts }}</div>
        <span>节点收藏</span>
    </a>

    <a href="#" class="col-md-4 text-center"
       style="display: block;border-left: 1px solid rgba(100, 100, 100, 0.4); border-right: 1px solid rgba(100, 100, 100, 0.4);">
        <div>{{ $favoriteTopicCounts }}</div>
        <span>主题收藏</span>
    </a>

    <a href="#" class="col-md-4 text-center" style="display: block;">
        <div>{{ $favoriteUserCounts }}</div>
        <span>关注用户</span>
    </a>
</div>
@show