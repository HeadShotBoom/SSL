@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Delete {{ $client->title }} <small>Are you sure?</small></h1>
    </div>
    <form action="{{ action('ClientController@handleDelete') }}" method="post" role="form">
        <input type="hidden" name="client" value="{{ $client->id }}" />
        <input type="submit" name="btn btn-danger" value="Yes" />
        <a href="{{ action('ClientController@index') }}" class="btn btn-default">No Way!</a>
    </form>
@stop