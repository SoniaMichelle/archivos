<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
</head>

<body>
    <div class="banner">
        <div class="contenido">
            <h1>Bienvenido</h1>
            <p>¿Que desea hacer?</p>
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <a href="{{ route('user.home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                <button type="button"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a></button>
                @if (Route::has('register'))
                <button type="button"><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></button>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </div>
</body>

</html>