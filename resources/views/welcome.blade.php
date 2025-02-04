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
                background-color: #111827;
            }
            .log {
                height: 100vh;
            }

            div {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
            }

            h1 {
                color: red;
                padding: 20px;
                border: 2px dotted red;
            }

            a {
                display: block;
                text-decoration: underline;
                color: white;
                padding-top: 2rem;
                font-size: 2rem;
                font-weight: 700;
            }

            .logo {
                height: 200px;
            }

        </style>
    </head>

    <body>
        @if (Route::has('login'))
            <div class="log">
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                <div>

                    <x-application-logo class="logo"/>
                    <h1>Laravel-CRM</h1>
                    <a href="{{ route('login') }}">Log in</a>

                    {{-- @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                    @endif --}}
                @endauth
                </div>
            </div>
        @endif
    </body>
</html>

