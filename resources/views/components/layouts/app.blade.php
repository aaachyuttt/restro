<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? env('APP_NAME') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-color2">
    @livewire('partials.navbar')
    {{ $slot }}
    @livewire('partials.footer')
    @livewire('partials.scripts')
    @livewireScripts
</body>

</html>
