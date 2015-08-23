@extends('layout.page')

@section("content")
    <h1>Archief</h1>
    <p>overzicht</p>

    @foreach ($posts as $post)

    <h3>{{$post->title}}</h3>
    <p>{!! $post->content !!}</p>
    <a href="/{{$post->type}}/{{$post->id}}">Bekijk</a>
<hr>

@endforeach
@stop
