@extends('layout.page')

@section("content")
    <h2>{{ $data->title }}</h2>
    <p>{!! $data->content !!}</p>
@stop
