@extends('layout.page')

@section("content")
<h2>{{ $post->title }}</h2>
<img src="{{ $post->get_data('image') }}" width="40%" style="float:left; margin-right:30px"/>
<p>{!! $post->content !!}</p>
<h3>{{ $post->get_data("price") }}</h3>
<ul>
    <li>{{ $post->get_data("detail1") }}</li>
    <li>{{ $post->get_data("detail2") }}</li>
    <li>{{ $post->get_data("detail3") }}</li>
    <li>{{ $post->get_data("detail4") }}</li>
</ul>

@stop
