@extends('layout.page')

@section("content")
    <h1>Archief</h1>
<hr>
    @foreach ($posts as $post)

    <h3>{{$post->title}}</h3>
    {{ substr(strip_tags($post->content), 0, 300) }}...<br /><br />
    <a href="/{{$post->type}}/{{$post->id}}" class="btn" style="float:right">Bekijk</a>
<hr>

@endforeach
@stop
