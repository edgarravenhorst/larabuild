@extends('layout.page')

@section("content")

<header id="home">
    <span class="wrapper">
        <h1>{{$post->title}}</h1>
        <h2>{{$post->get_data("subtitle")}}</h2>
    </span>
</header>

<section id="features">
    @foreach ($features as $feature)
    <div class="feature">
        <h3 class="title"><a href="/{{$feature->type}}/{{$feature->id}}">{{$feature->title}}</a></h3>
        <div class="excerpt">{{ substr(strip_tags($feature->content), 0, 60) }}...</div>
        <a href="/{{$feature->type}}/{{$feature->id}}" class="btn">Bekijk</a>
    </div>
    @endforeach
</section>

<section id="latest-posts">
    <h2>Laatste updates</h2>

    @foreach ($posts as $post)
    <div class="post">
        <h3 class="title"><a href="/{{$post->type}}/{{$post->id}}">{{$post->title}}</a></h3>
        <div class="excerpt">{{ substr(strip_tags($post->content), 0, 300) }}...</div>
        <a href="/{{$post->type}}/{{$post->id}}" class="btn">Bekijk</a>
    </div>
    @endforeach
</section>

@stop
