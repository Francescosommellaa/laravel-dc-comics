<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    {{-- Includiamo gli assets con la direttiva @vite --}}
    @vite('resources/js/app.js')
</head>

<body>

    @include('partials.navbar') <!-- Include navbar -->

    <div class="container mt-5">
        @yield('content') <!-- Contenuto dinamico -->
    </div>

    @include('partials.footer') <!-- Include footer -->

</body>

</html>
