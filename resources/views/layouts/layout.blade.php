<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <div class="navbar">
                <a href="login">Log In</a>
        </div>
            <h1 style="text-align:center;font-size:3rem">Welcome to pizza website</h1>

        @yield('content')

    </body>
</html>
