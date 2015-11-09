<!doctype html>

<html lang="en">
    @include ("partials.header")

    <body>
        <header id="main" class='home'>
            <section class="pagewrap">
                <a href="/"><img src="{{asset("/assets/images/logo.png")}}" width="250"></a>
                @if(Auth::user())
                <span style="float:right; margin-right:10px; ">{!! link_to_route('admin', 'Inloggen', null, array('class'=> '')) !!}</span>
                @endif
                <span style="float:right; margin-right:10px;" >{!! link_to_route('archive', 'Vacatures', array("type" => "jobs"), array('class'=> '')) !!}</span>
                <span style="margin-right:10px; float:right">{!! link_to_route('homepage', "Home") !!}</span>

            </section>
        </header>

        <section id="site-content">

            <header id="home" style="">
                <span class="wrapper">
                    <h1>{{$post->title}}</h1>
                    <h2>{{$post->get_data("subtitle")}}</h2>
                </span>
            </header>

            <section class="pagewrap">
                <section id="latest-posts" >
                    <div class="cols-6">
                        <h2>Diensten</h2>
                        @foreach ($posts as $post)
                        @if($post->type == "dienst")
                        <div class="post">
                            <h2 class="title"><a href="{{url($post->url)}}">{{$post->title}}</a></h2>
                            <h3 class="subtitle">{{$post->get_data("subtitle")}}</h3>
                            <div class="excerpt">{{ substr(strip_tags($post->get_data('excerpt')), 0, 150) }}...</div>
                            <a href="{{url($post->url)}}" class="btn">Bekijk</a>
                        </div>
                        @endif
                        @endforeach
                    </div>

                    <div class="cols-6">
                        <h2>Projecten</h2>
                        @foreach ($posts as $post)
                        @if($post->type == "project")
                        <div class="post">

                            <h2 class="title"><a href="{{url($post->url)}}">{{$post->title}}</a></h2>
                            <h3 class="subtitle">{{$post->get_data("subtitle")}}</h3>
                            <div class="excerpt">{{ substr(strip_tags($post->get_data('excerpt')), 0, 150) }}...</div>
                            <a href="{{url($post->url)}}" class="btn">Bekijk</a>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </section>
            </section>
        </section>


        <footer style="clear:both; width:100%; background:#f5f5f5; border-top:1px solid #eee;">
            <section class="pagewrap">
                <div class="cols-4" style="margin-left:0;">
                    <h3>Waar wij werken:</h3>
                    <p>
                        Rigtersbleek Zandvoort 10 ruimte 2.21<br />
                        7521 BE Enschede<br />
                        Nederland<br />
                    </p>
                </div>
                <div class="cols-4">
                    <h3>Hoe je ons bereiken kan:</h3>
                    <p>
                        E. info@code.rehab<br />
                        T. 053 - 711 34 91<br />
                    </p>
                </div>


            </section>
        </footer>

        <footer>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2444.137095522316!2d6.871940999999996!3d52.22272700000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8139258aa3723%3A0xb4985d8f1541f4d5!2sCode.Rehab!5e0!3m2!1snl!2snl!4v1440533084505" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </footer>

    </body>
</html>

