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
        <a wire:navigate href="/" @class(['current' => request()->is('/')])>Todos</a>
        <a wire:navigate href="/counter" @class(['current' => request()->is('/counter')])>Counter</a>
        <a wire:navigate href="/HelloWorld" @class(['current' => request()->is('/HelloWorld')])>HelloWorld</a>
        <a wire:navigate href="/posts" @class(['current', request()->is('/posts')])>Posts</a>
    </nav>

    {{ $slot }}
</body>

</html>
