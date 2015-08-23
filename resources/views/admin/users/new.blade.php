@extends('admin.layout.admin')

@section('page-content')
<section class='row'>
    {!! link_to_route('user_index', 'Terug naar overzicht', [], ['class'=>'btn']) !!}
</section>
<section>
    @include('admin.users.panels.register', [
    'panelID'=>1,
    'id' => "company-overview",
    'classes' => "cols-6",
    'title' => "Gebruiker Toevoegen",
    'action' => "create_company",
    'buttontext' => "Gebruiker aanmaken"
    ])
</section>

@stop
