<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Larabuild | Micro CMS</title>
        <meta name="description" content="The most flexible Micro CMS based on laravel!">
        <meta name="author" content="Code.Rehab">

        {!! HTML::style('assets/css/larabuild.css') !!}

        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body>
        <header id="main">
            <section class="pagewrap">

                <span style="margin-right:10px">{!! link_to_route('homepage', "Homepage") !!}</span>
                <span style="float:right">{!! link_to_route('admin', 'Inloggen', null, array('class'=> '')) !!}</span>
            </section>
        </header>
        <section class="pagewrap">

            @yield('content')

        </section>
        <script src="js/scripts.js"></script>
    </body>
</html>
