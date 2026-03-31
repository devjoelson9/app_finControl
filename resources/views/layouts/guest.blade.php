<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'FinControl') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="icon" type="image/svg+xml" href="{{ asset('/imgs/logo-finance.svg') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-slate-900 antialiased">
        <div class="min-h-screen flex flex-col items-center justify-center bg-slate-50 px-4 py-8">
            <div class="w-full max-w-md rounded-xl border border-slate-200 bg-white p-8 shadow-sm">
                <div class="flex items-center justify-center gap-3">
                    <a href="/" wire:navigate class="flex items-center gap-3">
                        <x-application-logo class="h-10 w-auto" />
                        <span class="text-lg font-semibold tracking-wide text-slate-900">
                            {{ config('app.name', 'FinControl') }}
                        </span>
                    </a>
                </div>

                <div class="mt-6">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
