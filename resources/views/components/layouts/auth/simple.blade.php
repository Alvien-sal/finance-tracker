<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        {{-- @include('partials.head') --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <title>{{ $title ?? 'My App' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    @php
        $user = auth()->user();
    @endphp

    </head>
    <body class="w-full h-full flex flex-col">
        <x-layouts.app.header :user="$user"/>
        
        <div class="flex flex-col gap-6">
            {{ $slot }}
        </div>
        </div>
        @fluxScripts
    </body>
</html>
