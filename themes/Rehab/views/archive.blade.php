@extends('layout.page')

@section("content")
<section class="pagewrap">

    <header id="page-header">
        <h1>Vacatures</h1>
    </header>

    <aside id="page-sidebar">
    </aside>


    <section id="page-content" class='archive'>
        @foreach ($posts as $post)

        @if($post->get_data("image"))
        <img src="{{ $post->get_data('image') }}" width="120" style="float:left; margin:10px"/>
        @endif

        <h3><a href="/{{$post->url}}" class="">{{$post->title}}</a></h3>
        {{ substr(strip_tags($post->content), 0, 300) }}...<br /><br />
        <a href="/{{$post->url}}" class="btn" style="float:right">Bekijk</a>
        <hr>

        @endforeach
    </section>

</section>
@stop
