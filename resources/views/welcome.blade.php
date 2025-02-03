<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel-crm</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Enriqueta:wght@400;500;600;700&display=swap" rel="stylesheet">

        {{-- styles --}}
        <style>

            body {
                font-family: 'Enriqueta', sans-serif;
                background-color: black;
            }
            .log {
                height: 100vh;
            }

            a {
                position: relative;
                top: 50%;
                left: 50%;
                text-decoration: none;
                color: white;
            }

        </style>
    </head>

    <body>
        @if (Route::has('login'))
            <div class="log">
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>

                    {{-- @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif --}}
                @endauth
            </div>
        @endif
    </body>
</html>
