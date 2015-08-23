<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>The HTML5 Herald</title>
        <meta name="description" content="The HTML5 Herald">
        <meta name="author" content="SitePoint">

        {!! HTML::style('assets/css/admin.css') !!}

        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <style>
            .pagewrap {
                max-width:960px;
                width:100%;
                margin:auto;
                border:1px solid #ddd;
                background:#fff;
                margin-top:2.5%;
                margin-bottom:2.5%;
                padding:40px;
            }

            hr{
                background:#ddd !important;
            }

        </style>

    </head>

    <body>
        <header id="main">
            <section class="pagewrap">
                <span>{!! link_to_route('admin', ' Inloggen', null, array('class'=> '')) !!}</span>
            </section>
        </header>
        <section class="pagewrap">

            @yield('content')

        </section>
        <script src="js/scripts.js"></script>
    </body>
</html>
