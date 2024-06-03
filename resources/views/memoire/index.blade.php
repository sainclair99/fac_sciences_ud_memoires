@extends('app')

@section('title', 'Memoire')

@section('content')
    <div class="w-full h-screen flex">
        <div class="sticky top-4 flex flex-col py-6 px-4 bg-blue w-1/6">
            <div class="text-2xl font-bold font-mono my-5">Options de Filtre</div>
            {{-- <a href="" class="">
                <div class="hover:bg-blue-100 w-full text-xl font-semibold font-mono text-start mb-2">Departement</div>
            </a> --}}
            <a href="" class="">
                <div class="hover:bg-blue-100 w-full text-xl font-semibold font-mono text-start mb-2 flex gap-2 items-center">
                    <img src="{{ asset('assets/svg/mircobiologist.svg') }}" alt="" srcset="" class="w-8 h-8">
                    <span>
                        Biologie animale
                    </span>
                </div>
            </a>
            <a href="" class="">
                <div class="hover:bg-blue-100 w-full text-xl font-semibold font-mono text-start mb-2 flex gap-2 items-center">
                    <img src="{{ asset('assets/svg/chemistry.svg') }}" alt="" srcset="" class="w-8 h-8">
                    <span>
                        Chimie
                    </span>
                </div>
            </a>
            <a href="" class="">
                <div class="hover:bg-blue-100 w-full text-xl font-semibold font-mono text-start mb-2 flex gap-2 items-center">
                    <img src="{{ asset('assets/svg/computer.svg') }}" alt="" srcset="" class="w-8 h-8">
                    <span>
                        Informatique
                    </span>
                </div>
            </a>
            <a href="" class="">
                <div class="hover:bg-blue-100 w-full text-xl font-semibold font-mono text-start mb-2 flex gap-2 items-center">
                    <img src="{{ asset('assets/svg/mathematical.svg') }}" alt="" srcset="" class="w-8 h-8">
                    <span>
                        Mathematique
                    </span>
                </div>
            </a>
            <a href="" class="">
                <div class="hover:bg-blue-100 w-full text-xl font-semibold font-mono text-start mb-2 flex gap-2 items-center">
                    <img src="{{ asset('assets/svg/physics.svg') }}" alt="" srcset="" class="w-8 h-8">
                    <span>
                        Physique
                    </span>
                </div>
            </a>
            {{-- todo --}}
            <a href="" class="">
                <div class="hover:bg-blue-100 w-full text-xl font-semibold font-mono text-start mb-2 flex gap-2 items-center">
                    <img src="{{ asset('assets/svg/computer.svg') }}" alt="" srcset="" class="w-8 h-8">
                    <span>
                        biologie vegetale
                    </span>
                </div>
            </a>
            <a href="" class="">
                <div class="hover:bg-blue-100 w-full text-xl font-semibold font-mono text-start mb-2 flex gap-2 items-center">
                    <img src="{{ asset('assets/svg/computer.svg') }}" alt="" srcset="" class="w-8 h-8">
                    <span>
                       Biochimie
                    </span>
                </div>
            </a>
            <a href="" class="">
                <div class="hover:bg-blue-100 w-full text-xl font-semibold font-mono text-start mb-2 flex gap-2 items-center">
                    <img src="{{ asset('assets/svg/computer.svg') }}" alt="" srcset="" class="w-8 h-8">
                    <span class="text-center">
                        Science de la terre
                    </span>
                </div>
            </a>
            {{-- todo --}}
            {{-- <a href="" class="">
                <div class="hover:bg-blue-100 w-full text-xl font-semibold font-mono text-start mb-2 flex gap-2 items-center">
                    <img src="{{ asset('assets/svg/physics.svg') }}" alt="" srcset="" class="w-8 h-8">
                    <span>
                        
                    </span>
                </div>
            </a> --}}
        </div>
        <div class="grid grid-cols-5 grid-flow-row gap-4 p-4">
            @foreach ($memoires as $memoire)
                {{-- {{ $memoire }} --}}
                <div class="flex flex-col justify-between py-2 px-4 bg-transparent rounded-md shadow-md w-64 h-80">
                    <div>
                        <img src="{{asset("assets/$memoire->first_page_image")}}" alt="" class="h-40">
                    </div>
                    <div>
                        <span class="text-semibold text-xl font-mono">{{ $memoire->theme }}</span>
                    </div>
                    <div class="flex gap-2 justify-end">
                        <button class="text-white py-2 px-4 bg-blue-500 rounded-md shadow-md hover:bg-blue-700 text-semibold text-xl">Ouvrir</button>
                        <button class="text-white py-2 px-4 bg-green-500 rounded-md shadow-md hover:bg-green-700 text-semibold text-xl">Telecharger</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection