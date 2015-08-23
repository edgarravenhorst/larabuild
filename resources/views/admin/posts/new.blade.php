@extends('admin.layout.admin')

@section('page-content')
<section class='row'>

</section>
<section>
    @include('admin.posts.panels.post-new-form', [
    'panelID'=>1,
    'id' => "company-overview",
    'classes' => "cols-10",
    'title' => "Gebruiker Toevoegen",
    'action' => "create_company",
    'buttontext' => "Item aanmaken"
    ])
</section>

@stop
