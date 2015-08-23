@extends('admin.layout.admin')

@section('page-content')

@include('admin.posts.panels.overview', [
'panelID'=>2,
'id' => "company-overview",
'classes' => "cols-12",
'title' => $post_type . "s"
])

@stop
