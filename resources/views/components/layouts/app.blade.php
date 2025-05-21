<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? env('APP_NAME') }}</title>
    <style>
        .dishes-card.style1:hover {
            background-image: url("{{ asset('assets/img/bg/dishesThumbBG.png') }}") !important;
            /* Default */
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-color2">
    @livewire('partials.preloader')
    @livewire('partials.scroll-up')
    @livewire('partials.mouse-cursor')
    @livewire('partials.sidebar')
    @livewire('partials.search')
    @livewire('partials.navbar')
    {{ $slot }}
    @livewire('partials.footer')
    @livewire('partials.scripts')
    @livewireScripts
</body>

</html>
