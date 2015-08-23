@extends('layout.page')

@section("content")
<h1>{{ $post->type }}</h1>
<p>{{ $post->content }}</p>
@stop
