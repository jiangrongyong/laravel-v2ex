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
        @include("header")
            <div class="container">
                @yield("content")
            </div>
        @include("footer")
    </body>
</html>