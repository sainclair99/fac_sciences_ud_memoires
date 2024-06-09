<header class="sticky top-0 bg-white/65 dark:bg-black/65 z-50">
    <div class="w-full h-20 bg-white/65 shadow-lg px-2 flex items-center justify-around dark:bg-black/65">
        <a href="/">
            <logo-text logo_text_white="{{ asset('logo_text_blanc.png') }}" logo_text_black="{{ asset('logo_text.png') }}" class="w-44 h-auto" dark={{false}}></logo-text>
        </a>
        
        <div class="flex items-star w-1/2 rounded-full bg-gray-100 border border-gray-500 dark:bg-gray-600/45">
            <form action="{{route('web.memoire.index')}}" method="get" class="w-full flex items-center justify-center px-2 h-12 border-none">
                <i class="fas fa-search text-gray-400 ml-3 cursor-pointer"></i>
                @if(isset($search))
                    <input type="text" name="search" placeholder="{{__('auth.search')}}" class="w-full px-4 py-2 text-gray-700 border-none bg-transparent dark:text-white" value="{{$search}}">
                @else
                    <input type="text" name="search" placeholder="{{__('auth.search')}}" class="w-full px-4 py-2 text-gray-700 border-none bg-transparent dark:text-white">
                @endif
            </form>
        </div>
        <ul class="flex gap-4">
            <li><a href="{{route('web.memoire.index')}}" class="dark:text-white hover:text-blue-700 font-semibold">{{ __('auth.thesis') }}</a></li>
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
            <a href="{{ url("login") }}" class="border border-black dark:border-white p-2 font-bold dark:text-white hover:shadow-md">{{ __('auth.login.login') }}</a>
            <a href="{{ url('register') }}" class="border bg-black border-black p-2 font-bold text-white dark:text-black dark:bg-white dark:border-white dark:hover:bg-gray-200 hover:shadow-md">{{ __('auth.signup') }}</a>
        @endif
        @if (app()->getLocale() == 'en')
            <language-change en_label='(En) English' fr_label='(Fr) French' code='en'></language-change>
        @else
            <language-change en_label='(En) Anglais' fr_label='(Fr) Français' code='fr'></language-change>
        @endif
    </div>
</header>