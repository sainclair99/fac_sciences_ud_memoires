<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fac Sciences Thesis</title>
        <link rel="shortcut icon" href="{{ asset('logo.png') }}">
        @vite(['resources/css/app.css'])
    </head>
    <body>
        <div id="app">
            <header>
                
            </header>

            <main class="mt-6">
                <div class="container flex h-100 w-100 bg-zinc-300">
                    <h3 class="text-black text-xl">
                        Hello World
                    </h3>
                </div>
                <img src="{{ asset('logo_text.png') }}" alt="" class="h-40 shadow-lg">
                <x-primary-button>
                    ENVOYER
                </x-primary-button>
            </main>

            <footer class="py-16 text-center text-sm text-green-400 dark:text-white/70">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </footer>
        </div>
    </body>
</html>
