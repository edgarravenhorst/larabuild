@extends('layout.page')

@section("content")
<h1>Dit is een {{ $data->type }}</h1>
<p>{{ $data->content }}</p>
@stop
