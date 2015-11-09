@extends('layout.page')

@section("content")
<section class="pagewrap">
    <header id="page-header">
        <h1>{{ $post->title }}</h1>
        <h2>{{ $post->get_data("subtitle") }}</h2>
    </header>

    <section id="page-content">
        {!! $post->content !!}
    </section>

    <aside id="page-sidebar">
        <h3>Interesse?</h3>
        Bel 053-711 34 91<br />
        of mail info@code.rehab
    </aside>
</section>
@stop
