<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Fac Sciences Thesis Online</title>
    <link rel="shortcut icon" href="{{ asset('logo.png') }}">
    @vite([
        'resources/css/app.css',
        'resources/sass/app.scss',
        'resources/js/app.js'
    ])
</head>
<body>
    <div id="app" class="w-full h-screen flex justify-center items-center bg-[asset('logo.png')]">
        <admin-login></admin-login>
    </div>
</body>
</html>