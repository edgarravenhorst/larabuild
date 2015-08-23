@extends('layout.page')

@section("content")
<h1>Archief</h1>
<hr>
@foreach ($posts as $post)

@if($post->get_data("image"))
<img src="{{ $post->get_data('image') }}" width="120" style="float:left; margin:10px"/>
@endif

<h3><a href="/{{$post->type}}/{{$post->id}}" class="">{{$post->title}}</a></h3>
{{ substr(strip_tags($post->content), 0, 300) }}...<br /><br />
<a href="/{{$post->type}}/{{$post->id}}" class="btn" style="float:right">Bekijk</a>
<hr>

@endforeach
@stop
