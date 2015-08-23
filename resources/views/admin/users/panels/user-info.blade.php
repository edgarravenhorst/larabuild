@extends('admin.partials.panel')

@section('panel-content-'.$panelID)
<h3>Account instellingen</h3>

{!! Form::open(array('route'=>'update_user', 'method'=>'put')) !!}

<span class='cols-1'>
    {!! Form::label('username', 'Gebruikersnaam') !!}
    {!! Form::text('username', $user->username, array('placeholder' => 'Gebruikersnaam'))!!}
</span>

<span class='row'>
    <span class='cols-6'>
        {!! Form::label('first_name', 'Voornaam') !!}
        {!! Form::text('first_name', $user->first_name, array('placeholder' => 'Voornaam'))!!}
    </span>
    <span class='cols-6'>
        {!! Form::label('last_name', 'Achternaam') !!}
        {!! Form::text('last_name', $user->last_name, array('placeholder' => 'Achternaam'))!!}
    </span>
</span>

<span class='cols-1'>
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', $user->email, array('placeholder' => 'Email'))!!}
</span>

<section class='row'>
    <span class='cols-6'>
        {!! Form::label('password', 'Wachtwoord') !!}
        {!! Form::password('password', array('placeholder' => 'Wachtwoord'))!!}
    </span>

    <span class='cols-6'>
        {!! Form::label('password_again', 'Wachtwoord Nogmaals') !!}
        {!! Form::password('password_again', array('placeholder' => 'Wachtwoord opnieuw'))!!}
    </span>
</section>

<h3>Adresgegevens</h3>

<span class='row'>
    {!! Form::label('country', 'Land') !!}
    {!! Form::text('country', $user->country, array('placeholder' => 'Uw land'))!!}
</span>

<span class='row'>
    {!! Form::label('street', 'Straatnaam') !!}
    {!! Form::text('street', $user->street, array('placeholder' => 'Uw straatnaam'))!!}
</span>

<section class='row'>
    <span class='cols-4'>
        {!! Form::label('postal', 'Postcode') !!}
        {!! Form::text('postal', $user->postal, array('placeholder' => 'Postcode'))!!}
    </span>
    <span class='cols-8'>
        {!! Form::label('city', 'Plaatsnaam') !!}
        {!! Form::text('city', $user->city, array('placeholder' => 'Plaatsnaam'))!!}
    </span>
</section>
<br />
{!! Form::submit('Wijzigingen opslaan', array('class' =>'btn btn-success')) !!}

{!! Form::close() !!}
@stop
