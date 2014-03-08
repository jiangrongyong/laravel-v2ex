@extends("layout.auth")
@section("content")

@include("topic.partials.list")
<?php echo $topics->links(); ?>

@stop