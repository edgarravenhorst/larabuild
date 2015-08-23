@extends('admin.layout.admin')

@section('page-content')

@if ($errors->any())
<div id='login-errors' class='errors'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    {{ implode('', $errors->all("<li class='error'>:message</li>")) }}
</div>
@endif

{!! Form::open(array('route'=>'create_post', 'method'=>'post')) !!}
<section class='row'>
    <section class="cols-9">
        @include('admin.posts.panels.post-new-form', [
        'panelID'=>1,
        'id' => "company-overview",
        'classes' => "cols-12",
        'title' => "Gebruiker Toevoegen",
        'action' => "create_company",
        'buttontext' => "Item aanmaken"
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
                        {!! Form::hidden('type', $post_type) !!}
                        {!! Form::submit('Aanmaken', array('class' =>'btn btn-success full-width'))!!}
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
    </section>
</section>
{!! Form::close() !!}

@stop


