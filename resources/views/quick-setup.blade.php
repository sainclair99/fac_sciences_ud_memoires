@extends('app')

@section('title', 'Setup')

@section('content')
    @if (isset($message))
        <div class="w-full bg-blue-700/55 text-xl text-center"> {{ $message }} </div>
    @endif
    
    <div class="w-full bg-gray-100 dark:bg-gray-600/45 rounded-md shadow-md p-4 text-2xl text-center font-bold">
        Quick Setup
    </div>
    <section class="max-w-4xl p-6 mx-auto bg-indigo-600 rounded-md shadow-md dark:bg-gray-800 mt-20 mb-20">
    <form action="{{route('web.etudiant.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-white dark:text-gray-200" for="nom">{{__("Name")}}</label>
                <input id="nom" name="nom" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="prenom">{{__('Prenom')}}</label>
                <input id="prenom" name="prenom" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="matricule">{{__('Matricule')}}</label>
                <input id="matricule" name="matricule" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required pattern="[0-9]{2}[Ss][0-9]{5}">
            </div>

            
            <div>
                <label class="text-white dark:text-gray-200" for="filiere">Filiere</label>
                <select name="filiere" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    @foreach ($filieres as $item)
                        <option value="{{$item->id}}">{{$item->label}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-white">
                {{__('Profile image')}}
              </label>
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-white" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="file_upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span class="">Importer une image</span>
                      <input id="file_upload" name="file_upload" type="file" class="sr-only" required>
                    </label>
                    <p class="pl-1 text-white">ou portez et deposez</p>
                  </div>
                  <p class="text-xs text-white">
                    PNG, JPG, GIF 10MB max
                  </p>
                </div>
              </div>
            </div>
        </div>

        <div class="flex justify-end mt-6">
            <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-green-500 rounded-md hover:bg-green-700 focus:outline-none focus:bg-gray-600">Enregistrer</button>
        </div>
    </form>
    </section>
@endsection