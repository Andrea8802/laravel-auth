<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>

    <div id="app">
        @include('components.header')
        @include('components.error')
        @yield('content')
        @include('components.footer')
    </div>

</body>

</html>
