<!doctype html>

<html lang="en">
    @include ("partials.header")

    <body>
        <header id="main">
            <section class="pagewrap">
                <a href="/"><img src="{{asset("/assets/images/logo.png")}}" width="250"></a>
                @if(Auth::user())
                <span style="float:right; margin-right:10px; ">{!! link_to_route('admin', 'Inloggen', null, array('class'=> '')) !!}</span>
                @endif
                <span style="float:right; margin-right:10px;" >{!! link_to('/contact', 'Contact') !!}</span>
                <span style="float:right; margin-right:10px;" >{!! link_to_route('archive', 'Jobs', array("type" => "jobs"), array('class'=> '')) !!}</span>
                <span style="margin-right:10px; float:right">{!! link_to_route('homepage', "Home") !!}</span>

            </section>
        </header>
        <section id="site-content">
            @yield('content')
        </section>
        <footer>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2444.137095522316!2d6.871940999999996!3d52.22272700000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8139258aa3723%3A0xb4985d8f1541f4d5!2sCode.Rehab!5e0!3m2!1snl!2snl!4v1440533084505" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </footer>

    </body>
</html>
