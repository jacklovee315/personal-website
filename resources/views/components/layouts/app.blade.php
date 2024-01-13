<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>

    @livewireStyles
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="px-4 md:px-2 mx-auto flex flex-col max-w-4xl">

<nav class="my-10 flex justify-between items-center">
    <a href="{{route('about')}}" wire:navigate class="text-bold text-xl">
        Jack love
    </a>

    <ul class="space-x-10 justify-end hidden sm:flex">
        <x-elements.list-item name="about"/>
        <x-elements.list-item name="posts"/>
    </ul>

    <div class="sm:hidden">
        <x-heroicon-o-bars-3 class="w-6"/>
    </div>
</nav>

<div>
    {{ $slot }}
</div>

@livewireScriptConfig
</body>
</html>
