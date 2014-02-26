@section("sidebar")
<div class="row">
    <div class="col-md-3">
        <a href="{{ action('MembersController@show', array($user->username)) }}">
            <img src="{{ $user->getAvatar(48) }}"
                 style="width: 48px;height: 48px;"/>
        </a>
    </div>
    <div class="col-md-9" style="padding-top: 10px;">
        <a href="{{ action('MembersController@show', array($user->username)) }}">{{ $user->username }}</a>
    </div>
</div>
<div class="row text-muted small" style="margin-top: 8px;">
    <a href="{{ action('MembersFollowingController@index', array($user->username)) }}" class="col-md-4 text-center" style="display: block;border-right: 1px solid rgba(100, 100, 100, 0.4);">
        <div>{{ $followingTotal }}</div>
        <span>关注</span>
    </a>

    <a href="{{ action('MembersFavoritesController@index', array($user->username)) }}" class="col-md-4 text-center" style="display: block;">
        <div>{{ $favoriteTotal }}</div>
        <span>收藏</span>
    </a>
</div>
@show