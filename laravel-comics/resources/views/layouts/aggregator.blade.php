<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/js/app.js')

</head>

<body>

    @include ('header')  
    <main>
        <div class="container-fluid">
            @yield('content')
        </div>
    </main>
    @include ('footer') 

</body>

</html>