<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/layout.css">

    <title>登录</title>
</head>
<body>
<div class="container">
    {{ Form::open([
    "route" => "user/login",
    "autocomplete" => "off",
    "class" => "form-signin",
    "role" => "form"
    ]) }}
    {{ Form::text("username", Input::get("username"), [
    "placeholder" => "username",
    "class" => "form-control"
    ]) }}
    {{ Form::password("password", [
    "placeholder" => "password",
    "class" => "form-control"
    ]) }}
    @if ($error = $errors->first("password"))
    <div class="error">
        {{ $error }}
    </div>
    @endif
    {{ Form::submit("登录", [
    "class" => "btn btn-lg btn-primary btn-block"
    ]) }}
    {{ Form::close() }}
</div>
</body>
</html>