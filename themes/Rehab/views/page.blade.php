@extends('layout.page')

@section("content")
    <h1>{{ $data->title }}</h1>
    <p>{!! $data->content !!}</p>
@stop
