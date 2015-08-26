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
