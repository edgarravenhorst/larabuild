<section id="{{$id}}" class='panel {{$classes}}'>
    <header>
        <h2>{{$title}}</h2>
    </header>

    <section class='content'>
        @yield('panel-content-'.$panelID)
    </section>
</section>
