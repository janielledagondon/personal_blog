<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Personal Diary</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
<div class="flex flex-col">
    <div class="min-h-screen flex items-center justify-center">
        <div class="flex flex-col justify-around h-full">
            <div>
                <h1 class="mb-6 text-gray-900 text-center font-light tracking-wider text-4xl sm:mb-8 sm:text-6xl">
                    Go to <a href="/home" class="hover:font-bold hover:text-black">Diary</a>
                </h1>
                <p class="text-center font-light text-black">Where you can write whatever your heart desires.</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
