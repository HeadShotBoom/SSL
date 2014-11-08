@extends('layout')

@section('content')

{{ Form::open(array('url'=>'register')) }}


    {{ Form::label('email', 'Email Address') }}
    {{ Form::text('email') }}
    <br />
<span class="error">{{ $errors->first('email') }}</span>

    {{ Form::label('username', 'Username') }}
    {{ Form::text('username') }}
    <br />
<span class="error">{{ $errors->first('username') }}</span>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
    <br />
<span class="error">{{ $errors->first('password') }}</span>
    {{ Form::submit('Submit') }}

{{ Form::close() }}


@stop