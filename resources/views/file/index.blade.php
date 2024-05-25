<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File | Fac Sciences</title>
    <link rel="shortcut icon" href="{{ asset('logo.png') }}">
    @vite([
        'resources/css/app.css',
    ])
</head>
<body>
    @foreach ($files as $file)
        <div class="w-1/2 overflow-auto">
            <iframe src="{{ url('assets/'.$file->path) }}" frameborder="0" class="w-full h-auto"></iframe>
        </div>
    @endforeach
</body>
</html>