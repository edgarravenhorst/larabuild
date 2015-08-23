@extends('admin.layout.admin')

@section('page-content')

<section class='row'>

</section>

<section class='row'>
    @include('admin.posts.panels.post-edit-form', [
    'panelID'=>1,
    'id' => "post-info",
    'classes' => "cols-10",
    'title' => "" . $post->title,
    'action' => "update_user",
    'buttontext' => "Update Gebruiker"
    ])
</section>

@stop
