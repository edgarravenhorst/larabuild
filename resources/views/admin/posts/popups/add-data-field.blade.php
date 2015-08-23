@extends('admin.partials.popup')

@section('popup-content-'.$popupID)

{!! Form::open(array('route'=>'add_data_field','method'=>'post')) !!}
<section class="row">

    <span class='cols-1'>
        {!! Form::label('type', "Type veld") !!}
        {!! Form::select('type', array(
        'text' => 'Text',
        'textarea' => 'Textarea',
        'hidden' => 'Hidden',
        ),
        'text'); !!}
    </span>

    <span class='cols-1'>
        {!! Form::label('title', "Titel") !!}
        {!! Form::text('title', "", array('placeholder' => ''))!!}
    </span>

    <span class='cols-1'>
        {!! Form::label('name', "Codename") !!}
        {!! Form::text('name', "", array('placeholder' => ''))!!}
    </span>

    <span class='cols-1'>
        {!! Form::label('description', "Omschrijving") !!}
        {!! Form::text('description', "", array('placeholder' => ''))!!}
    </span>

    <span class='cols-1'>
        {!! Form::label('value', "Waarde") !!}
        {!! Form::text('value', "", array('placeholder' => ''))!!}
    </span>

    <span class='cols-1'>
        {!! Form::label('validation', "Validatie") !!}
        {!! Form::text('validation', "", array('placeholder' => ''))!!}
    </span>
    <br />
    <br />
    <span class='row'>
    {!! Form::hidden('id', $post->id) !!}

    </span>
</section>



@stop

@section('popup-buttons-'.$popupID)
{!! Form::submit('Veld toevoegen', array('class' =>'btn btn-success')) !!}
{!! Form::close() !!}
@stop

