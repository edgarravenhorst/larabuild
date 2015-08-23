<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Larabuild Admin</title>

        {!! HTML::style('assets/css/admin.css') !!}

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    </head>

    <body id='admin' class=''>

        <section id="page-content" class='' style="margin:auto; margin-top:10%; max-width:400px">
            @yield('page-content')
        </section>

    </body>
</html>
