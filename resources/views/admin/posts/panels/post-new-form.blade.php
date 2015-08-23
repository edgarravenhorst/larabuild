@extends('admin.partials.panel')

@section('panel-content-'.$panelID)


@if ($errors->any())
<div id='login-errors' class='errors'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    {{ implode('', $errors->all("<li class='error'>:message</li>")) }}
</div>
@endif

{!! Form::open(array('route'=>'create_post', 'method'=>'post')) !!}

<span class='cols-1'>
    {!! Form::label('title', $post->type . ' titel') !!}
    {!! Form::text('title', $post->title, array('placeholder' => 'Gebruikersnaam'))!!}
</span>

<span class='cols-1'>
    {!! Form::label('url', $post->type . ' url') !!}
    {!! Form::text('url', $post->url, array('placeholder' => 'Gebruikersnaam'))!!}
</span>

<span class='cols-1'>
    {!! Form::label('content', $post->type . ' content') !!}
    {!! Form::textarea('content', $post->content, array("id"=>"tinymce", 'placeholder' => 'Gebruikersnaam'))!!}
</span>

<br />
{!! Form::hidden('type', $post_type) !!}
{!! Form::submit('Aanmaken', array('class' =>'btn btn-success'))!!}


@stop

