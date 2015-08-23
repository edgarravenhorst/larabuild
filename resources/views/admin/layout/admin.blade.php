<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DeltaXs Admin Area</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        {!! HTML::style('assets/css/admin.css') !!}
        {!! HTML::script('assets/js/app.js') !!}

        @include('tinymce::tpl')
    </head>

    <body id='template-admin' class=''>

        <header id='template'>
            {!! link_to_route('admin', 'Larabuild', [], ['class'=>'logo']) !!}
            <nav>
                <ul>
                    <li>{!! link_to_route('user_logout', 'Uitloggen', null, array('class'=> '')) !!}</li>
                </ul>
            </nav>
        </header>

        <aside id="template">

            <section class='user-info'>
                <h2>{{Auth::user()->name}}</h2>
                {{-- <h5>{{Auth::user()->roles[0]->display_name}}</h5> --}}
            </section>

            <nav>
                <ul>
                    <li>{!! link_to_route('user_index', 'Users', []) !!}</li>

                    @foreach (Config::get('theme.admin_menu') as $admin_page)
                    <li>{!! link_to_route('post_type_index', $admin_page['title'], ["type" => $admin_page['type']]) !!}</li>
                    @endforeach

                </ul>
            </nav>
        </aside>

        <section id="template-content" class='pagecontainer'>
            @yield('page-content')
        </section>

    </body>
</html>

