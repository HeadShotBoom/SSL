@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Create Client</h1>
    </div>

    <form action="{{ action('ClientController@handleCreate') }}" method="post" role="form">
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" name="first_name" />
            <span class="error">{{ $errors->first('first_name') }}</span>
        </div>
        <br />
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name" />
            <span class="error">{{ $errors->first('last_name') }}</span>
        </div>
        <br />
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" name="phone" placeholder="(555)555-1234" />
            <span class="error">{{ $errors->first('phone') }}</span>
        </div>
        <br />
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" />
            <span class="error">{{ $errors->first('email') }}</span>
        </div>
        <br />
        <div class="form-group">
            <label for="website">Website</label>
            <input type="text" class="form-control" name="website" />
            <span class="error">{{ $errors->first('website') }}</span>
        </div>
        <br />
        <input type="submit" value="Create" class="btn btn-primary" />
        <a href="{{ action('ClientController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop