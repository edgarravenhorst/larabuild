@extends('admin.partials.panel')

@section('panel-content-'.$panelID)

{!! link_to_route('new_user', '+ Nieuw Item', null ,array('class' => 'btn'))!!}

<table class='list'>
    <tr class='list-head'>
        <th>Logo</th>
        <th>Gebruikersnaam</th>
        <th>Type Account</th>
        <th>Email</th>
        <th></th>
    </tr>

    @foreach($users as $user)
    <tr>
        {!! Form::open(array('route'=>'remove_user', 'method'=>'delete'), array('style' => 'float: right;')) !!}
        {!! Form::hidden('id', $user->id) !!}

        <td width="5%">
            <img src="http://www.gravatar.com/avatar/{{ md5($user->email) }}?s=75" alt="logo" id="user-image" />
        </td>

        <td width="18%">
            {!! link_to_route('edit_user', $user->name, array($user->id)) !!}
        </td>


        <td width="12%">
            {{-- {{$user->roles[0]->display_name}} --}}
        </td>

        <td width="55%">
            {{strip_tags($user->email)}}
        </td>

        <td width="10%" align="right ">
            {!! Form::submit('Verwijderen') !!}
        </td>
        {!! Form::close() !!}
    </tr>
    @endforeach

</table>

@stop
