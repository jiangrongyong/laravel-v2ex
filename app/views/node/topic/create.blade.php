@extends("layout.auth")
@section("content")

{{ Form::open(["url" => action("NodesTopicsController@store", [$node_id]), "role" => "form"]) }}
{{ Form::errors() }}
@if (Session::has('infos'))
<div class="alert alert-success">
    <ul>
        @foreach (Session::get('infos')->all() as $info)
        <li>{{ $info }}</li>
        @endforeach
    </ul>
</div>
@endif

<h2>创建新主题</h2>

{{ Form::text("title", Input::get("title"), ["placeholder" => 'Title', "class" => "form-control"]) }}
{{ Form::textarea("content", Input::get("content"), ["placeholder" => 'Content', "class" => "form-control"]) }}

{{ Form::submit("提交", ["class" => "btn btn-lg btn-primary btn-block"]) }}
{{ Form::close() }}

@stop