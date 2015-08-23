<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>The HTML5 Herald</title>
        <meta name="description" content="The HTML5 Herald">
        <meta name="author" content="SitePoint">

        <link rel="stylesheet" href="css/styles.css?v=1.0">

        <!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
        <style>
            iframe{
                width:100%;
                height:600px;
            }
            body{
                background-color:#000;
                color:#ccc;
            }
        </style>
    </head>

    <body>
        <section style="
                        max-width:960px;
                        width:100%;
                        margin:auto;
                        ">

            @yield('content')

        </section>
        <script src="js/scripts.js"></script>
    </body>
</html>
