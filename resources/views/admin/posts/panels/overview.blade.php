@extends('admin.partials.panel')

@section('panel-content-'.$panelID)

{!! link_to_route('new_post', '+ Nieuw Item', ["type" => $post_type] ,array('class' => 'btn'))!!}

<table class='list'>
    <tr class='list-head'>
        <th>Logo</th>
        <th>Gebruikersnaam</th>
        <th>Type Account</th>
        <th>Email</th>
        <th></th>
    </tr>

    @foreach($posts as $post)
    <tr>
        {!! Form::open(array('route'=>'remove_post', 'method'=>'delete'), array('style' => 'float: right;')) !!}
        {!! Form::hidden('id', $post->id) !!}

        <td width="5%">
            <img src="http://www.gravatar.com/avatar/{{ md5($post->email) }}?s=75" alt="logo" id="post-image" />
        </td>

        <td width="18%">
            {!! link_to_route('edit_post', $post->title, array($post->id)) !!}
        </td>


        <td width="12%">
            {{-- {{$post->roles[0]->display_name}} --}}
        </td>

        <td width="55%">
            {{strip_tags($post->content)}}
        </td>

        <td width="10%" align="right ">
            {!! Form::submit('Verwijderen') !!}
        </td>
        {!! Form::close() !!}
    </tr>
    @endforeach

</table>

@stop
