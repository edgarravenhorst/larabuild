@extends('admin.partials.panel')

@section('panel-content-'.$panelID)

{!! Form::open(array('url'=>'registration')) !!}

@if ($errors->any())
<div id='login-errors' class='errors'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    {{ implode('', $errors->all("<li class='error'>:message</li>")) }}
</div>
@endif
<span class="row">

    {!! Form::label('name', 'Uw naam') !!}
    {!! Form::text('name', '', array('placeholder' => 'Bedrijfsnaam', 'class'=>'form-control'))!!}
</span>
<span class="row">
    <span class="cols-6">
        {!! Form::label('username', 'Gebruikersnaam') !!}
        {!! Form::text('username', '', array('placeholder' => 'Gebruikersnaam', 'class'=>'form-control'))!!}
    </span>
    <span class="cols-6">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', '', array('placeholder' => 'Email', 'class'=>'form-control'))!!}
    </span>
</span>
<span class="row">

    <span class="cols-6">
        {!! Form::label('username', 'Wachtwoord') !!}
        {!! Form::password('password', array('placeholder' => 'Wachtwoord', 'class'=>'form-control'))!!}
    </span>
    <span class="cols-6">
        {!! Form::label('email', 'Wachtwoord herhalen') !!}
        {!! Form::password('password_confirmation', '', array('placeholder' => 'Wachtwoord herhalen', 'class'=>'form-control'))!!}
    </span>

</span>


<br />

{!! Form::submit('Registreren', array('class' =>'btn btn-success'))!!}
{!! Form::close() !!}

@stop
