@extends('layout')

@section('content')

{{ Form::open(array('url'=>'login'))}}

{{ Form::label('username', 'User Name') }}
{{ Form::text('username') }}

{{ Form::label('password', 'Password') }}
{{ Form::password('password') }}

{{ Form::submit('Log In') }}

{{ Form::close() }}


@stop