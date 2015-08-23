@extends('admin.layout.basic')

@section('page-content')

@include('admin.users.panels.register', [
'panelID'=>1,
'id' => "company-overview",
'classes' => "cols-12",
'title' => "Registreren",
'action' => "create_user",
'buttontext' => "Registreren"
])
<span style="margin-left:10px;">{!! link_to_route('user_login', ' Inloggen', null, array('class'=> '')) !!}</span>
@stop

