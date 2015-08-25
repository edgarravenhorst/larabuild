<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>The HTML5 Herald</title>
        <meta name="description" content="The HTML5 Herald">
        <meta name="author" content="SitePoint">

        {!! HTML::style('assets/css/rehab.css') !!}

        </style>

    </head>

    <body>
        <header id="main">
            <section class="pagewrap">
                <img src="{{asset("/assets/images/logo.png")}}" width="250">
                @if(Auth::user())
                <span style="float:right; margin-right:10px; ">{!! link_to_route('admin', 'Inloggen', null, array('class'=> '')) !!}</span>
                <span style="float:right; margin-right:10px;" >{!! link_to_route('archive', 'Jobs', array("type" => "jobs"), array('class'=> '')) !!}</span>
                <span style="margin-right:10px; float:right">{!! link_to_route('homepage', "Home") !!}</span>
                @endif
            </section>
        </header>
        <section class="pagewrap">

            @yield('content')

        </section>
        <script src="js/scripts.js"></script>
    </body>
</html>
