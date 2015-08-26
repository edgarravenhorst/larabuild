@extends('layout.page')

@section("content")
<section class="pagewrap">
    <header id="page-header">
        <h1>Archief</h1>
    </header>
    <section id="page-content">
        @foreach ($posts as $post)

        @if($post->get_data("image"))
        <img src="{{ $post->get_data('image') }}" width="120" style="float:left; margin:10px"/>
        @endif

        <h3><a href="/{{$post->type}}/{{$post->id}}" class="">{{$post->title}}</a></h3>
        {{ substr(strip_tags($post->content), 0, 300) }}...<br /><br />
        <a href="/{{$post->type}}/{{$post->id}}" class="btn" style="float:right">Bekijk</a>
        <hr>

        @endforeach

    </section>
    <aside id="page-sidebar">
        <h3>Waar wij werken:</h3>
        <p>
            Rigtersbleek Zandvoort 10 ruimte 2.21<br />
            7521 BE Enschede<br />
            Nederland<br />
        </p>
        <h3>Hoe je ons bereiken kan:</h3>
        <p>
            email: info@code.rehab<br />
            T. 053 - 711 34 91<br />
        </p>
    </aside>
</section>
@stop
