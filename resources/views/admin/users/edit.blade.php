@extends('admin.layout.admin')

@section('page-content')

<section class='row'>
    {!! link_to_route('user_index', 'Terug naar overzicht', [], ['class'=>'btn']) !!}
</section>

<section class='row'>
    @include('admin.users.panels.user-info', [
    'panelID'=>1,
    'id' => "user-info",
    'classes' => "cols-6",
    'title' => "Gebruiker: " . $user->username,
    'action' => "update_user",
    'buttontext' => "Update Gebruiker"
    ])
</section>

@stop
