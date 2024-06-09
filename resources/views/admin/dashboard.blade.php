<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin | Fac Sciences Thesis</title>
        <link rel="shortcut icon" href="{{ asset('logo.png') }}">

        @vite([
            'resources/css/app.css',
            'resources/js/app.js',
        ])
        <!-- Styles -->
        {{-- @livewireStyles --}}
    </head>
    <body>
        <div class="flex h-[100dvh] overflow-hidden">
            
            @include('components.app.admin.sidebar')

            <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden" x-ref="contentarea">
                <x-app.admin.header />

                <main class="grow">
                    @yield('content')
                </main>
            </div>
        </div>
        @livewireScripts
    </body>
</html>
