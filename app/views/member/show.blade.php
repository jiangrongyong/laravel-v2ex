@extends("layout.auth")
@section("content")
<div class="row" style="margin-bottom: 10px;">
    <div class="col-md-1">
        <a href="{{ action('MembersController@show', array($user->id)) }}">
            <img src="{{ Gravatar::src($user->email, 73) }}"
                 style="width: 73px;height: 73px;"/>
        </a>
    </div>
    <div class="col-md-11" style="padding-left: 30px;">
        <div class="row">
            <div class="col-md-12">
                <h3 style="margin-top:14px;">{{ $user->username }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-muted small">
                第 {{ $user->id }} 号会员，加入于 {{ $user->created_at }}
            </div>
        </div>
    </div>
</div>
<hr/>
@stop