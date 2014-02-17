@extends('layout.auth')
@section('content')
<style>
    #settings_form .row {
        margin-bottom: 10px;
    }
    #settings_form label {
        font-weight: normal;
    }
    #settings_form input[type="submit"] {
        width: 70px;
    }
</style>

<ol class='breadcrumb list-unstyled' style='padding:0;background-color:white;'>
    <li><a href='/'>{{ Lang::get('app.name') }}</a></li>
    <li class='actived'>设置</li>
</ol>

{{ Form::open(['url' => action('SettingsController@update', $user->setting->id), 'role' => 'form', 'id' => 'settings_form', 'method' => 'put']) }}
    <div class="row">
        <div class="col-md-2 text-right">用户名</div>
        <div class="col-md-6">{{ $user->username }}</div>
    </div>
    <div class="row">
        <div class="col-md-2 text-right">电子邮件</div>
        <div class="col-md-6">{{ $user->email }}</div>
    </div>
    <div class="row">
        <div class="col-md-2 text-right">{{ Form::label('city', '所在城市') }}</div>
        <div class="col-md-6">{{ Form::text('city', $user->setting->city, ['class' => 'form-control']) }}</div>
    </div>
    <div class="row">
        <div class="col-md-2 text-right">{{ Form::label('website', '个人网站') }}</div>
        <div class="col-md-6">{{ Form::text('website', $user->setting->website, ['class' => 'form-control']) }}</div>
    </div>
    <div class="row">
        <div class="col-md-2 text-right">{{ Form::label('bio', '个人简介') }}</div>
        <div class="col-md-6">{{ Form::textarea('bio', $user->setting->bio, ['class' => 'form-control']) }}</div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6">{{ Form::submit('提交', ['class' => 'btn btn-lg btn-primary btn-block']) }}</div>
    </div>
{{ Form::close() }}

@stop