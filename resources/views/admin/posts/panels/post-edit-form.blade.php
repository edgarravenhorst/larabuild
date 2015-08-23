@extends('admin.partials.panel')

@section('panel-content-'.$panelID)

<span class='cols-1'>
    {!! Form::label('title', $post->type . ' titel') !!}
    {!! Form::text('title', $post->title, array('placeholder' => 'Gebruikersnaam'))!!}
</span>

<span class='cols-1'>
    {!! Form::label('content', $post->type . ' content') !!}
    {!! Form::textarea('content', $post->content, array("id"=>"tinymce", 'placeholder' => 'Gebruikersnaam', 'rows' => '100'))!!}
</span>

<br />
@stop

