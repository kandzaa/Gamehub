<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>GameHub</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-zinc-900 text-gray-300">
        <nav class="bg-neutral-950 border-b border-gray-700">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-center">
                <div class="space-x-4">
                    @auth
                        <a href="{{ url('/home') }}" class="text-gray-300 hover:text-green-500">Home</a>
                    @endauth
                    <a href="{{ route('login') }}" class="text-gray-300 hover:text-green-500">Log in</a>
                    <a href="{{ route('register') }}" class="text-gray-300 hover:text-green-500">Register</a>
                </div>
                
            </div>
        </nav>

        <main class="py-12">
            <h1 class="text-8xl text-center text-green-500 mb-4">GameHub</h1>
            <h2 class="text-2xl text-center text-white">From gamers to gamers.</h2>
        </main>
    </body>
</html>
