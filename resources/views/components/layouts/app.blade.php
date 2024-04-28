<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Livewire Basics' }}</title>

    <link rel="stylesheet" href="/app.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav>
        <a href="/" @class(['current' => request()->is('/')])>Todos</a>
        <a href="/counter" @class(['current' => request()->is('/counter')])>Counter</a>
        <a href="/HelloWorld" @class(['HelloWorld' => request()->is('/HelloWorld')])>HelloWorld</a>
    </nav>

    {{ $slot }}
</body>

</html>
