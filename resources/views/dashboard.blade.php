@extends('app')

@section('title', 'Profile')

@section('content')
    {{-- {{ $etudiant }} --}}
    <div class="w-full flex">
        <div class="sticky top-3 z-30 h-screen dark:bg-gray-700 bg-gray-200 pt-12 w-1/3">
            <!-- Card start -->
                <div class="max-w-sm mx-auto bg-white dark:bg-gray-900 rounded-lg overflow-hidden shadow-lg">
                    <div class="border-b px-4 pb-6">
                        <div class="text-center my-4">
                            <img class="h-32 w-32 rounded-full border-4 border-white dark:border-gray-800 mx-auto my-4"
                                src="{{asset('assets/'.$etudiant->image_url)}}" alt="">
                            <div class="py-2">
                                <h3 class="font-bold text-2xl text-gray-800 dark:text-white mb-1">{{$etudiant->nom}}</h3>
                                <div class="inline-flex text-gray-700 dark:text-gray-300 items-center">
                                    {{$etudiant->prenom}}
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-2 px-2">
                            {{-- <button
                                class="flex-1 rounded-full bg-blue-600 dark:bg-blue-800 text-white dark:text-white antialiased font-bold hover:bg-blue-800 dark:hover:bg-blue-900 px-4 py-2">
                                Follow
                            </button> --}}
                            <button
                                class="flex-1 rounded-full border-2 border-gray-400 dark:border-gray-700 font-semibold text-black dark:text-white px-4 py-2">
                                {{__('auth.logout')}}
                            </button>
                        </div>
                    </div>
                    <div class="px-4 py-4">
                        <div class="flex gap-2 items-center text-gray-800 dark:text-gray-300 mb-4">
                            <span>
                                <strong class="text-black dark:text-white">
                                    {{$etudiant->filiere->label}}
                                </strong>
                                @switch($etudiant->filiere->label)
                                    @case('INF')
                                        : Informatique
                                        @break
                                    @case('PHY')
                                        : Physique
                                        @break
                                    @case('MAT')
                                        : Mathematique
                                        @break
                                    @default
                                @endswitch
                            </span>
                        </div>
                        
                    </div>
                </div>
            <!-- Card end -->
        </div>
        <div class="w-full mt-12">
            <form action="{{route('web.memoire.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="max-w-md mx-auto p-6 bg-white rounded-md shadow-lg">
                    <h2 class="text-3xl font-semibold text-center mb-6 dark:text-white">Importer le memoire</h2>
                    <div class="relative border-2 border-dashed border-gray-300 dark:border-gray-600 rounded-md px-6 py-8 text-center">
                        <input type="file" id="file" name="file" required>
                        <svg class="mx-auto h-16 w-16 text-gray-400 dark:text-gray-300 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 17l-4 4m0 0l-4-4m4 4V3"></path>
                        </svg>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Porter & Deposez votre fichier ici ou <label for="file" class="cursor-pointer text-blue-500 hover:underline">parcourir</label> pour Importer. fichier PDF uniquement</p>
                    </div>
                    {{-- <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-md w-full mt-6 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-500 dark:focus:ring-opacity-50">
                        <label for="fileInput">Importer</label>
                    </button> --}}
                    <div class="mt-2">
                        <label class="block text-sm font-medium text-black">
                        {{__('Photo de premier de couverture')}}
                      </label>
                      <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                          <svg class="mx-auto h-12 w-12 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                          <div class="flex text-sm text-gray-600">
                            <label for="first_page_image" class="relative cursor-pointer bg-black rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                              <span class="">Importer une image</span>
                              <input id="first_page_image" name="first_page_image" type="file" class="sr-only" required>
                            </label>
                            <p class="pl-1 text-black">ou portez et deposez</p>
                          </div>
                          <p class="text-xs text-black">
                            PNG, JPG, GIF 10MB max
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="mt-2">
                        <label class="text-black dark:text-gray-200" for="theme">{{__("Thème")}}</label>
                        <input id="theme" name="theme" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
                    </div>
                    <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-md w-full mt-6 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-500 dark:focus:ring-opacity-50" id="select-image">
                        Soummetre
                    </button>
                </div>
            </form>
            
        </div>
    </div>
@endsection

{{-- @section('script')
    <script>
        const selectImage = document.querySelector('#select-image');
        const inputFile = document.querySelector('#fileInput');
        const imgArea = document.querySelector('#img-area');
        console.log(selectImage, inputFile, imgArea);
        selectImage.addEventListener('click', function () {
            console.log('Image clicked')
            inputFile.click();
        })

        inputFile.addEventListener('change', function () {
            const image = this.files[0]
            const reader = new FileReader();
            reader.onload = ()=> {
                const allImg = imgArea.querySelectorAll('img');
                allImg.forEach(item=> item.remove());
                const imgUrl = reader.result;
                const img = document.createElement('img');
                img.src = imgUrl;
                imgArea.appendChild(img);
                imgArea.classList.add('active');
                imgArea.dataset.img = image.name;
            }
            reader.readAsDataURL(image);
        })
        // console.log('Exist')
    </script>
@endsection --}}