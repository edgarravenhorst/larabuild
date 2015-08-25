@extends('layout.page')

@section("content")
<section class="pagewrap">
    <section id="page-content">

        <h1>{{ $post->title }}</h1>
        <h2>{{ $post->get_data("subtitle") }}</h2>
        <p>{!! $post->content !!}</p>

    </section>
</section>
@stop
