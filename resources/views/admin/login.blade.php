<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DeltaXs Admin Area</title>

        {!! HTML::style('assets/css/admin.css') !!}

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    </head>
    <body>
        <div class="cols-4">
            <h2>Inloggen</h2>
            <p>Gebruik onderstaand formulier om in te loggen bij DeltaXs. Indien u nog geen account heeft kunt u zich {!! link_to_route('user_registration', 'hier registreren', null, array('class'=> '')) !!}</p>

            {!! Form::open(array('url' => '/login','method' => 'post')) !!}
            @if ($errors->any())
            <div id='login-errors' class='errors'>
                <a href='#' class='close' data-dismiss='alert'>&times;</a>
                {!! implode('', $errors->all("<li class='error'>:message</li>")) !!}
            </div>
            @endif
            {!! Form::text('username', '', array('placeholder' => 'Gebruikersnaam', 'class'=>'form-control'))!!}
            {!! Form::password('password', array('placeholder' => 'Password', 'class'=>'form-control'))!!}
            {!! Form::submit('Login', array('class' =>'btn btn-primary btn-block'))!!}

            <span style="margin-left:10px;">{!! link_to_route('user_registration', ' of Registreren', null, array('class'=> '')) !!}</span>
            {!! Form::close() !!}

        </div>
        <div class="cols-8">&nbsp;</div>
    </body>
</html>

