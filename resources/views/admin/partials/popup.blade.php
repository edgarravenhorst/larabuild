<section id="{{$id}}" class='popup {{$classes}}'>
    <section class="inner {{$innersize}}">
        <button class="close">X</button>

        <section class='content'>
            <header>
                <h2>{{$title}}</h2>
            </header>
            @yield('popup-content-'.$popupID)
        </section>

        <footer id="buttons">
            @yield('popup-buttons-'.$popupID)
        </footer>
    </section>
</section>
