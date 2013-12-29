<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">

        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>

        <title>{{Lang::get('app.name')}}</title>
    </head>
    <body>
        @include("header")
            <div class="container">
                @yield("content")
            </div>
        @include("footer")
    </body>
</html>