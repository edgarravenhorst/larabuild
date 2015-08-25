@extends('layout.page')

@section("content")
<section class="pagewrap">
    <h1>{{ $post->title }}</h1>
    <p>{!! $post->content !!}</p>
</section>
@stop
