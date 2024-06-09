@extends('app')

@section('title', 'Memoire')

@section('content')
    <div class="w-full h-screen flex bg-[url('/public/assets/bg_pic/book-library.jpg')] bg-fixed">
        <div class="sticky top-4 flex flex-col py-6 px-4 bg-white w-1/6">
            <div class="text-2xl font-bold font-mono my-5">{{__("filter options")}}</div>
            {{-- <a href="" class="">
                <div class="hover:bg-blue-100 w-full text-xl font-semibold font-mono text-start mb-2">Departement</div>
            </a> --}}
            <a href="" class="">
                <div class="hover:bg-blue-100 w-full text-xl font-semibold font-mono text-start mb-2 flex gap-2 items-center">
                    <img src="{{ asset('assets/svg/mircobiologist.svg') }}" alt="" srcset="" class="w-8 h-8">
                    <span>
                        {{__("animal biology")}}
                    </span>
                </div>
            </a>
            <a href="" class="">
                <div class="hover:bg-blue-100 w-full text-xl font-semibold font-mono text-start mb-2 flex gap-2 items-center">
                    <img src="{{ asset('assets/svg/chemistry.svg') }}" alt="" srcset="" class="w-8 h-8">
                    <span>
                        {{__("chemistry")}}
                    </span>
                </div>
            </a>
            <a href="" class="">
                <div class="hover:bg-blue-100 w-full text-xl font-semibold font-mono text-start mb-2 flex gap-2 items-center">
                    <img src="{{ asset('assets/svg/computer.svg') }}" alt="" srcset="" class="w-8 h-8">
                    <span>
                        {{__("computer science")}}
                    </span>
                </div>
            </a>
            <a href="" class="">
                <div class="hover:bg-blue-100 w-full text-xl font-semibold font-mono text-start mb-2 flex gap-2 items-center">
                    <img src="{{ asset('assets/svg/mathematical.svg') }}" alt="" srcset="" class="w-8 h-8">
                    <span>
                        {{__("mathematics")}}
                    </span>
                </div>
            </a>
            <a href="" class="">
                <div class="hover:bg-blue-100 w-full text-xl font-semibold font-mono text-start mb-2 flex gap-2 items-center">
                    <img src="{{ asset('assets/svg/physics.svg') }}" alt="" srcset="" class="w-8 h-8">
                    <span>
                        {{__("physics")}}
                    </span>
                </div>
            </a>
            {{-- todo --}}
            <a href="" class="">
                <div class="hover:bg-blue-100 w-full text-xl font-semibold font-mono text-start mb-2 flex gap-2 items-center">
                    <img src="{{ asset('assets/svg/computer.svg') }}" alt="" srcset="" class="w-8 h-8">
                    <span>
                        {{__("plant's biology")}}
                    </span>
                </div>
            </a>
            <a href="" class="">
                <div class="hover:bg-blue-100 w-full text-xl font-semibold font-mono text-start mb-2 flex gap-2 items-center">
                    <img src="{{ asset('assets/svg/computer.svg') }}" alt="" srcset="" class="w-8 h-8">
                    <span>
                        {{__("biochemistry")}}
                    </span>
                </div>
            </a>
            <a href="" class="">
                <div class="hover:bg-blue-100 w-full text-xl font-semibold font-mono text-start mb-2 flex gap-2 items-center">
                    <img src="{{ asset('assets/svg/computer.svg') }}" alt="" srcset="" class="w-8 h-8">
                    <span class="text-center">
                        {{__("earth science")}}
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
                <div class="flex flex-col justify-between py-2 px-4 rounded-md shadow-md w-64 h-80 bg-white/90">
                    <div class="w-full flex justify-center">
                        <img src="{{asset("assets/$memoire->first_page_image")}}" alt="" class="h-40">
                    </div>
                    <div>
                        <span class="text-semibold text-xl font-mono">{{ $memoire->theme }}</span>
                    </div>
                    <div class="flex gap-2 justify-end">
                        <button class="text-white py-2 px-4 bg-blue-500 rounded-md shadow-md hover:bg-blue-700 text-semibold text-xl capitalize">{{__("open")}}</button>
                        <a href="{{route('memoire.download',['file'=>$memoire])}}">
                            <button class="text-white py-2 px-4 bg-green-500 rounded-md shadow-md hover:bg-green-700 text-semibold text-xl capitalize">{{__("download")}}</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection