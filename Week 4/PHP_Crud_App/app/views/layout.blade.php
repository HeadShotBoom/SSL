<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clients</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <a href="{{ action('ClientController@index') }}" class="navbar-brand">Clients</a>
        </div>
        @if(Auth::check())
        <a id="logout" href="{{ action('HomeController@logout') }}" class="btn btn-primary">Log Out</a>
        @else
        <a id="logout" href="{{ action('HomeController@login') }}" class="btn btn-primary">Log In</a>
        <a id="register" href="{{ action('HomeController@register') }}" class="btn btn-primary">Register</a>
        @endif
    </nav>
    @yield('content')
</div>
</body>
</html>