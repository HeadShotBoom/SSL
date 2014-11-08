@extends('layout')

@section('content')
<?php
$userId = Auth::user()->username;
?>
<h1>You have Secret Access! {{ $userId }}</h1>
@stop