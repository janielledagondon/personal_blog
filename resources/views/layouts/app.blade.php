<!doctype html>
<html lang="en">
<head>
    <title>Personal Diary</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="container max-w-full mx-auto">
    <div id="app">
        <main>
            @yield('content')
        </main>        
    </div>
</body>
</html>
