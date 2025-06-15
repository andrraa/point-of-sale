<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Point Of Sale')</title>
    @vite(['resources/css/app.css'])
    @stack('styles')
</head>
<body>
    @yield('content')

    @vite(['resources/js/app.js'])
    @stack('scripts')
</body>
</html>