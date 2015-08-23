@extends('layout.video')

@section("content")
<h1>Dit is een {{ $data->type }}</h1>
<p>{{ $data->content }}</p>
<iframe src="https://player.vimeo.com/video/136541238" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="https://vimeo.com/136541238">An Improbable Weapon Supercut</a> from <a href="https://vimeo.com/burgerfiction">Burger Fiction</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
@stop
