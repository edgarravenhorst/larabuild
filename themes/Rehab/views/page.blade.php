@extends('layout.page')

@section("content")
    <h1>Dit is een Pagina: {{ $data->title }}</h1>
    <p>{!! $data->content !!}</p>
@stop
