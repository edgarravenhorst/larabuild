<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>The HTML5 Herald</title>
        <meta name="description" content="The HTML5 Herald">
        <meta name="author" content="SitePoint">

        <link rel="stylesheet" href="css/styles.css?v=1.0">

        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <style>
            body{
                background-color:#ccc;
                color:#000;
            }

            .pagewrap{
                max-width:960px;
                width:100%;
                margin:auto;
                background:#fff;
                padding:50px;
                box-sizing:border-box;
            }
        </style>

    </head>

    <body >
        <section class="pagewrap" style="">
        {!! link_to_route('admin', ' Inloggen', null, array('class'=> '')) !!}
        @yield('content')

        </section>
        <script src="js/scripts.js"></script>
    </body>
</html>
