@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Edit Client</h1>
    </div>

    <form action="{{ action('ClientController@handleEdit') }}" method="post" role="form">
        <input type="hidden" name="id" value="{{ $client->id }}" />
        <div class="form-group">
            <span class="error">{{ $errors->first('first_name') }}</span>
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" name="first_name" value="{{ $client->first_name }}" />
        </div>
        <br />
        <div class="form-group">
            <span class="error">{{ $errors->first('last_name') }}</span>
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name" value="{{ $client->last_name }}" />
        </div>
        <br />
        <div class="form-group">
            <span class="error">{{ $errors->first('phone') }}</span>
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" name="phone" value="{{ $client->phone }}" />
        </div>
        <br />
        <div class="form-group">
            <span class="error">{{ $errors->first('email') }}</span>
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value="{{ $client->email }}" />
        </div>
        <br />
        <div class="form-group">
            <span class="error">{{ $errors->first('website') }}</span>
            <label for="website">Website</label>
            <input type="text" class="form-control" name="website" value="{{ $client->website }}" />
        </div>
        <br />
        <input type="submit" value="Save" class="btn btn-primary" />
        <a href="{{ action('ClientController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop