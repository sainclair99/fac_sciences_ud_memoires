<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fac Sciences Thesis</title>
        <link rel="shortcut icon" href="{{ asset('logo.png') }}">
        @vite([
            'resources/css/app.css',
            'resources/sass/app.scss',
            'resources/js/app.js'
        ])
    </head>
    <body>
        <div id="app">
            <header class="sticky top-0 bg-white/65 dark:bg-black/65">
                <div class="w-full h-20 bg-white/65 shadow-lg px-2 flex items-center justify-around dark:bg-black/65">
                    <logo-text logo_text_white="{{ asset('logo_text_blanc.png') }}" logo_text_black="{{ asset('logo_text.png') }}" class="w-44 h-auto" dark={{false}}></logo-text>
                    
                    <div class="flex items-star w-1/2 rounded-full bg-gray-100 border border-gray-500 dark:bg-gray-600/45">
                        <form action="" method="get" class="w-full flex items-center justify-center px-2 h-12 border-none">
                            <i class="fas fa-search text-gray-400 ml-3 cursor-pointer"></i>
                            <input type="text" name="search" placeholder="{{__('auth.search')}}" class="w-full px-4 py-2 text-gray-700 border-none bg-transparent dark:text-white">
                        </form>
                    </div>
                    <ul class="flex gap-4">
                        <li><a href="" class="dark:text-white hover:text-blue-700 font-semibold">{{ __('auth.thesis') }}</a></li>
                        <li><a href="" class="dark:text-white hover:text-blue-700 font-semibold">{{ __('auth.supervisors') }}</a></li>
                    </ul>
                    @if (Auth::user())
                        <p class="dark:text-white hover:text-blue-700 font-semibold">{{Auth::user()->name}}</p>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
        
                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('auth.logout') }}
                            </x-responsive-nav-link>
                        </form>
                    @else
                        <a href="{{ url('/login') }}" class="border border-black dark:border-white p-2 font-bold dark:text-white hover:shadow-md">{{ __('auth.login') }}</a>
                        <a href="{{ url('/register') }}" class="border bg-black border-black p-2 font-bold text-white dark:text-black dark:bg-white dark:border-white dark:hover:bg-gray-200 hover:shadow-md">{{ __('auth.signup') }}</a>
                    @endif
                    @if (app()->getLocale() == 'en')
                        <language-change en_label='(En) English' fr_label='(Fr) French' code='en'></language-change>
                    @else
                        <language-change en_label='(En) Anglais' fr_label='(Fr) Français' code='fr'></language-change>
                    @endif
                </div>
            </header>

            <main class="w-full flex flex-col items-center justify-center">
                {{-- <div class="bg-blue-700/40 w-1/2 h-auto p-4 rounded-md shadow-2xl">
                    <form action="{{url('/pdf-p')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="title"> Titre
                            <input type="text" name="title" id="title">
                        </label><br><br>
                        <label for="path" class="block">
                            <span class="sr-only">Choose</span>
                            <input type="file" name="path" id="path" class="block text-sm text-slate-500 file:rounded-full file:px-2 file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 file:hover:bg-violet-100"/>
                        </label>
                        <button type="submit">Envoyer</button>
                    </form>
                </div> --}}
                <div class="w-full h-screen">
                    <img src="{{ asset('assets/home_pic/fac1.jpg') }}" alt="" srcset="" class="w-full h-screen">
                </div>
            </main>

            <footer class="py-16 text-center text-sm text-green-400 dark:text-white/70">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </footer>
        </div>
    </body>
</html>
