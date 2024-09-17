<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/401ea8d0bd.js" crossorigin="anonymous"></script>
    <title>Layout anghi | @yield('titlePage')</title>

    {{-- Includiamo gli assets con la direttiva @vite --}}
    @vite('resources/js/app.js')
</head>
<body>

    @include('partials.navbar')

    @yield('hero')

    @yield('content')

    @include('partials.footer')

</body>
</html>
