<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DeltaXs Admin Area</title>

        {!! HTML::style('assets/css/admin.css') !!}

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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

            {{--
            <nav>
                <ul>
                    <li>{!! link_to_route('branches_index', 'Branches', []) !!}</li>
                    <li>{!! link_to_route('account_index', 'Mijn Account', []) !!}</li>
                    <li>{!! link_to_route('companies_index', 'Mijn Bedrijven', []) !!}</li>
                    <li>{!! link_to_route('products_index', 'Mijn Producten', []) !!}</li>
                    <li>{!! link_to_route('services_index', 'Mijn Diensten', []) !!}</li>
                    @if (Entrust::can('read-mail'))
                    <li>{!! link_to_route('mail_index', 'Mijn Inbox', []) !!}</li>
                    @endif
                </ul>
            </nav>
            --}}
        </aside>

        <section id="template-content" class='pagecontainer'>
            @yield('page-content')
        </section>


        {!! HTML::script('assets/js/deltaxs.js') !!}

    </body>
</html>

