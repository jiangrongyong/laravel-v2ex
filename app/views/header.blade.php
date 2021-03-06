@section("header")
    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">{{Lang::get('app.name')}}</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="{{ action('MembersController@index') }}">Members</a></li>
                    <li><a href="http://about.me/jiangrongyong">About</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $user->username }}<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ action('MembersController@show', array($user->username)) }}">个人资料</a></li>
                            <li><a href="{{ action('SettingsController@index') }}">设置</a></li>
                            <li><a href="{{ action('UserController@getLogout') }}">注销</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@show