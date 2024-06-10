@extends('app')

@section('content')
    <div class="w-full overflow-auto h-screen">
        <iframe src="{{ url('assets/'.$memoire->file) }}" frameborder="0" class="w-full h-sreen">
        </iframe>
    </div>
@endsection