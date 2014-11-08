@extends('layout')

@section('content')
    <?php
    if(Auth::check()){
        $userId = Auth::user()->id;
    }
    ?>
    @if(isset($userId))
    <div class="page-header">
        <h1>All Clients</h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ action('ClientController@create') }}" class="btn btn-primary">Create Client</a>
        </div>

        @if(Session::has('message'))
            <div class="panel-body">
                <p class="alert alert-info">{{Session::get('message')}}</p>
            </div>
        @endif

    </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Website</th>
            </tr>
            </thead>
            <tbody>
        @foreach($client as $client)
            <?php
            $thisId =  $client->creatorId;
            ?>
            @if($userId == 2)
                <tr>
                    <td>{{ $client->first_name }} {{ $client->last_name }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->website }}</td>
                    <td><a href="{{ action('ClientController@edit', $client->id) }}" class="btn btn-default">Edit</a> <a href="{{ action('ClientController@delete', $client->id) }}" class="btn btn-default">Delete</a> </td>
                </tr>
            @elseif($userId == $thisId )
                <tr>
                    <td>{{ $client->first_name }} {{ $client->last_name }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->website }}</td>
                    <td><a href="{{ action('ClientController@edit', $client->id) }}" class="btn btn-default">Edit</a> <a href="{{ action('ClientController@delete', $client->id) }}" class="btn btn-default">Delete</a> </td>
                </tr>
            @endif
        @endforeach
        @else
        <div class="page-header">
            <h1>All Clients</h1>
        </div>

        <div class="panel panel-default">
            <div class="panel-body">
                <a href="{{ action('ClientController@create') }}" class="btn btn-primary">Create Client</a>
            </div>
    @endif
    </tbody>
</table>
@stop