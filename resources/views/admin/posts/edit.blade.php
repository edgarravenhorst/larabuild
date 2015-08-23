@extends('admin.layout.admin')

@section('page-content')


@if ($errors->any())
<div id='login-errors' class='errors'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    {{ implode('', $errors->all("<li class='error'>:message</li>")) }}
</div>
@endif

{!! Form::open(array('route'=>'update_post', 'method'=>'post')) !!}
<section class='row'>
    <section class="cols-9">
        @include('admin.posts.panels.post-edit-form', [
        'panelID'=>1,
        'id' => "post-info",
        'classes' => "cols-12",
        'title' => "" . $post->title,
        'action' => "update_user",
        'buttontext' => "Update Gebruiker"
        ])
    </section>
    <section class="cols-3">
        <section class='row'>
        <section class="cols-12 panel">
            <header>
                <h4 style="margin-top:0;">update post</h4>
                <p>Gebruik de onderstaande knop om de {{ $post->type }} op te slaan</p>
            </header>

            <section class='content'>
                <span class='cols-1'>
                    {!! Form::label('url', $post->type . ' url') !!}
                    {!! Form::text('url', $post->url, array('placeholder' => 'Gebruikersnaam'))!!}
                </span>
                <span class='cols-1'>
                {!! Form::hidden('id', $post->id) !!}
                {!! Form::submit('Wijzigingen opslaan', array('class' =>'btn btn-success full-width')) !!}
                </span>
            </section>
        </section>
        </section>

        @include('admin.posts.panels.post-data-fields', [
        'panelID'=>2,
        'id' => "post-info",
        'classes' => "cols-12",
        'title' => "" . "Settings",
        'action' => "update_user",
        'buttontext' => "Update " . $post->type
        ])

        <span class='row'>
            <button class="full-width activatepopup" data-popup="add_post_data">Veld aanmaken</button>
        </span>

    </section>
</section>
{!! Form::close() !!}

@include('admin.posts.popups.add-data-field', [
'popupID'=>1,
'id' => "add_post_data",
'classes' => "",
'innersize' => "medium",
'title' => "" . "Create data field",
'action' => "add_data_field",
'buttontext' => "Veld aanmaken"
])

@stop
