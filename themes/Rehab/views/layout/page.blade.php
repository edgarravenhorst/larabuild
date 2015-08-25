<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Code.Rehab</title>
        <meta name="description" content="Code.Rehab - Its time for an intervention!">
        <meta name="author" content="Code.Rehab">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">

        <link rel="icon" type="image/png" href='{{asset("/assets/images/favicon.png")}}'>
        <link rel="image_src" href='{{asset("/assets/images/logo.png")}}'>
        {!! HTML::style('assets/css/rehab.css') !!}

        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script async="" src="//www.google-analytics.com/analytics.js"></script><script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-62525489-1', 'auto');
        ga('send', 'pageview');

        </script>
    </head>

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
        <script src="js/scripts.js"></script>
    </body>
</html>
