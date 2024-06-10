@extends('admin.dashboard')

@section('content')
    <div class="text-white"> _ </div>
    {{-- DEPARTEMENTS --}}
    <span class="flex items-center">
        <span class="h-px flex-1 bg-black"></span>
        <span class="shrink-0 px-6 text-xl">Departements</span>
        <span class="h-px flex-1 bg-black"></span>
    </span>
    <div
    class="relative flex flex-col w-full text-gray-700 bg-white shadow-md rounded-xl">
        <table class="w-full text-left table-auto min-w-max text-md">
            <thead>
            <tr>
                <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                    Nom
                </p>
                </th>
                <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                    Chef
                </p>
                </th>
                <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70"></p>
                </th>
            </tr>
            </thead>
            <tbody>
                @foreach ($departements as $dept)
                    <tr>
                        <td class="p-4 border-b border-blue-gray-50">
                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                            {{ $dept->name }}
                        </p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                            {{ $dept->head_name }}
                        </p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                        <a href="#" class="block font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">
                            Edit
                        </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="text-white"> _ </div>
    <div class="text-white"> _ </div>
    {{-- FILIERES --}}
    <span class="flex items-center">
        <span class="h-px flex-1 bg-black"></span>
        <span class="shrink-0 px-6 text-xl">Filieres</span>
        <span class="h-px flex-1 bg-black"></span>
    </span>
    <div
    class="relative flex flex-col w-full text-gray-700 bg-white shadow-md rounded-xl">
        <table class="w-full text-left table-auto min-w-max text-md">
            <thead>
            <tr>
                <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                    Libelle
                </p>
                </th>
                </th>
                <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70"></p>
                </th>
            </tr>
            </thead>
            <tbody>
                @foreach ($filieres as $fil)
                    <tr>
                        <td class="p-4 border-b border-blue-gray-50">
                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                            {{ $fil->label }}
                        </p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                        <a href="#" class="block font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">
                            Edit
                        </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <span class="flex items-center">
        <span class="h-px flex-1 bg-black"></span>
        <span class="shrink-0 px-6">Lorem, ipsum dolor</span>
        <span class="h-px flex-1 bg-black"></span>
    </span>
@endsection

@section('script')
    <script>
        console.log('test');
    </script>
@endsection
