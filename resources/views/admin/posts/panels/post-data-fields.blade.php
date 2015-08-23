@extends('admin.partials.panel')

@section('panel-content-'.$panelID)

<?php //var_dump($post->get_admin_fields()) ?>

@foreach($post->get_admin_fields() as $field)
<span class='row'>
    @if($field->type == "text")
    {!! Form::label("data_" . $field->name, $field->title) !!}
    @if($field->description) <p style="margin:-5px 0 5px 0; font-size:13px;">{{$field->description}}</p> @endif

    {!! Form::text("data_" . $field->name, $field->value, array('placeholder' => $field->title))!!}
    @endif

    @if($field->type == "textarea")
    {!! Form::label("data_" . $field->name, $field->title) !!}
    @if($field->description) <p style="margin:-5px 0 5px 0; font-size:13px;">{{$field->description}}</p> @endif

    {!! Form::textarea("data_" . $field->name, $field->value, array('placeholder' => $field->title))!!}
    @endif

    @if($field->type == "hidden")
    {!! Form::hidden("data_" . $field->name, $field->value) !!}
    @endif
</span>

@endforeach
@stop
