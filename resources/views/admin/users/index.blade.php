@extends('admin.layout.admin')

@section('page-content')

@include('admin.users.panels.overview', [
'panelID'=>2,
'id' => "company-overview",
'classes' => "cols-12",
'title' => "Gebruikers"
])

@stop
