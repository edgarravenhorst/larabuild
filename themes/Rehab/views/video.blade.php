@extends('layout.video')

@section("content")
<h2>{{ $post->title }}</h2>
<p>{!! $post->content !!}</p>
<iframe src="https://player.vimeo.com/video/{!! $post->get_data()->video_url->value !!}" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="https://vimeo.com/136541238">An Improbable Weapon Supercut</a> from <a href="https://vimeo.com/burgerfiction">Burger Fiction</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
@stop
