@extends('admin.layout.basic')

@section('page-content')


<section id="login" class='panel'>
    <header>
        <h2>Inloggen</h2>
        <p>Gebruik onderstaand formulier om in te loggen. Indien u nog geen account heeft kunt u zich<br /> {!! link_to_route('user_registration', 'hier registreren', null, array('class'=> '')) !!}</p>
    </header>

    <section class='content'>
        {!! Form::open(array('url' => '/login','method' => 'post')) !!}
        @if ($errors->any())
        <div id='login-errors' class='errors'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            {!! implode('', $errors->all("<li class='error'>:message</li>")) !!}
        </div>
        @endif
        {!! Form::label('username', 'Username') !!}
        {!! Form::text('username', '', array('placeholder' => 'Gebruikersnaam', 'class'=>'form-control'))!!}

        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', array('placeholder' => 'Password', 'class'=>'form-control'))!!}

        <br />
        <br />

        {!! Form::submit('Login', array('class' =>'btn btn-primary btn-block'))!!}

        {!! Form::close() !!}
    </section>
</section>

@stop
