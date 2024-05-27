<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite([
        'resources/css/app.css',
        'resources/sass/app.scss',
        'resources/js/app.js'
    ])
</head>
<body>
    <div class="w-full h-screen flex flex-col justify-center items-start bg-zinc-300">
        <h1 class="font-bold text-2xl">
            {{__("Confirm Password")}}
        </h1>
        <h3 class="font-bold text-2xl">
            {{__("Already registered?")}}
        </h3>
    </div>
</body>
</html>