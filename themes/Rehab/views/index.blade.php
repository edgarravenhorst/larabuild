@extends('layout.page')

@section("content")

<header id="home">
    <span class="wrapper">
        <h1>{{$post->title}}</h1>
        <h2>{{$post->get_data("subtitle")}}</h2>
    </span>
</header>

<section class="pagewrap">
    <section id="latest-posts" >
        <section class="cols-6">
            <h2>Laatst toegevoegd</h2>
            @foreach ($posts as $post)
            @if($post->type != "jobs")
                <div class="post">
                    <h2 class="title"><a href="{{url($post->url)}}">{{$post->title}}</a></h2>
                    <h3 class="subtitle">{{$post->get_data("subtitle")}}</h3>
                    <div class="excerpt">{{ substr(strip_tags($post->content), 0, 150) }}...</div>
                    <a href="{{url($post->url)}}" class="btn">Bekijk</a>
                </div>
            @endif
            @endforeach
        </section>

        <section class="cols-6">
            <h2>Vacatures</h2>
            @foreach ($posts as $post)
            @if($post->type == "jobs")
            <div class="post">

                <h2 class="title"><a href="{{url($post->url)}}">{{$post->title}}</a></h2>
                <h3 class="subtitle">{{$post->get_data("subtitle")}}</h3>
                <div class="excerpt">{{ substr(strip_tags($post->content), 0, 150) }}...</div>
                <a href="{{url($post->url)}}" class="btn">Bekijk</a>
            </div>
            @endif
            @endforeach
        </section>
    </section>
</section>
@stop
