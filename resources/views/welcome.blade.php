<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/dist/output.css')

    </head>
    <body>

        <x-common.nav></x-common.nav>

        <div class="w-full">
            <div class="grid w-screen h-screen max-w-screen-xl grid-cols-1 mx-auto place-content-center">
                <div class="text-5xl font-bold text-center text-violet-900">
                    Welcome to ToDo Lists. Sign Up and get started today. Or Login and pickup where you left!
                </div>
                <div class="mt-8 text-center">
                    <a href="{{ route('register') }}" class="px-4 py-2 text-white rounded-md text-xg bg-violet-700">Sign Up</a>
                    <a href="{{ route('session.create') }}" class="px-4 py-2 text-white rounded-md text-xg bg-violet-700">Login</a>
                </div>
            </div>
        </div>

    </body>
</html>
